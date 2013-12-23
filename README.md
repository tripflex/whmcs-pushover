## WHMCS 5.2+ Notifications for Pushover (pushover.net)
Author: Myles McNamara (get@smyl.es)

### Description

This is an addon module for WHMCS (whmcs.com) to send push notifications using the Pushover API.

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


Got an idea?  Stick a <a href="https://github.com/tripflex/whmcs-pushover/fork">fork</a> in it, send a <a href="https://github.com/tripflex/whmcs-pushover/pulls">pull request</a>, <a href="https://github.com/tripflex/whmcs-pushover/issues">open a new issue</a>, or <a href="http://smyl.es/contact/">email me</a>!

### Installation
<a href="https://github.com/tripflex/whmcs-pushover/archive/master.zip">Download</a> latest release, and copy the entire <b>modules</b> directory to your root WHMCS installation.

Login to WHMCS Admin area, Setup >> Addon Modules, then activate "Pushover Notifications".  Once you activate the addon module, click on <b>Configure</b>, enter your user key from Pushover (pushover.net), select Access Control, click Save Changes, and profit!