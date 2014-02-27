## WHMCS Pushover (pushover.net) Notifications
Author: Myles McNamara (get@smyl.es)

# Do not use v1.1 branch
This is a branch in development, I decided to take an OOP approach to this plugin (trying it from scratch), so don't use that branch, stick with the master branch, I will pull that one in once it is functional

### Description

This is an addon module for WHMCS (whmcs.com) to send push notifications using the Pushover API.

Currently the only working feature is high priority notification for a new support ticket being opened.  There are many other features and configurable options planned which are listed below.

This release is still in beta stages so use at your own risk.  Tested working on WHMCS 5.2.1 and WHMCS 5.3.1 Beta.

### Screenshots
<table>
    <td width="33%">
        <img src="https://smyl.es/img/Screenshot_2013-12-23-17-16-53.png" alt="Pull Down Notification Preview">
    </td>
    <td width="33%">
        <img src="https://smyl.es/img/Screenshot_2013-12-23-17-14-47.png" alt="Notification View">
    </td>    
    <td width="33%">
        <img src="https://smyl.es/img/Screenshot_2013-12-23-17-14-31.png" alt="Notification List View">
    </td>
</table>

### Features
***

Feature | Availability | Status
--- | --- | ---
New support ticket opened notification | `active` | complete
New support ticket reply notification | `active` | testing
Link to ticket from notification | `active` | complete
Configure instances to send notifications (New, Reply, Dept Change, Etc) | `planned` | pending
Allow priority to be based off ticket priority | `planned` | pending
Multiple user keys | `planned` | pending
Custom subject configuration | `planned` | pending
Custom addon module configuration page | `planned` | in dev
Configure notification priority | `planned` | in dev
Configure notification sound | `planned` | in dev
Custom subject configuration | `planned` | in dev
Message max characters concat | `planned` | in dev
Configure notification timestamp | `planned` | in dev
Custom app title in Pushover | `planned` | in dev
Custom ticket URL | `planned` | pending

### Needs Work
***
- Format special characters in responses (COMPLETED)
- Consolodate code functions
- Concatenate message

Got an idea?  Stick a <a href="https://github.com/tripflex/whmcs-pushover/fork">fork</a> in it, send a <a href="https://github.com/tripflex/whmcs-pushover/pulls">pull request</a>, <a href="https://github.com/tripflex/whmcs-pushover/issues">open a new issue</a>, or <a href="http://smyl.es/contact/">email me</a>!

### Installation
<a href="https://github.com/tripflex/whmcs-pushover/archive/master.zip">Download</a> latest release, and copy the entire <b>modules</b> directory to your root WHMCS installation.

Login to WHMCS Admin area, Setup >> Addon Modules, then activate "Pushover Notifications".  Once you activate the addon module, click on <b>Configure</b>, enter your user key from Pushover (pushover.net), select Access Control, click Save Changes, and profit!
