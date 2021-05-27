<div class="email-left-box px-0 mb-3">

    <div class="mail-list mt-4">
        <a href="{{route('settings')}}" class="list-group-item {{ (request()->is('settings')) ? 'active' : '' }}"><img src="/xhtml/images/svg/users-cog-solid.svg" class="mr-3 text-white align-middle" width="25" height="25"> Account
            settings<span class="font-weight-light">
                Personal info, passwords and organizational profile
            </span></a>

        <a href="{{route('settingsusers')}}" class="list-group-item {{ (request()->is('settingsusers')) ? 'active' : '' }}"><i
                class="fa fa-users font-18 align-middle mr-2"></i>Users<br>
                <span class="font-weight-light mt-2">
                    create accounts, manage accounts and rights.
                </span>
             </a>

        <a href="{{route('settingssupportchannels')}}" class="list-group-item {{ (request()->is('settingssupportchannels')) ? 'active' : '' }}"><img src="/xhtml/images/svg/customer-support.svg" class="mr-3 align-middle" width="15" height="15">
                Support Channels <br> <span class="font-weight-light mt-2">
                    create accounts, manage accounts and rights
            </span>
        </a>
        <a
            href="{{route('settingsgeneral')}}" class="list-group-item {{ (request()->is('settingsgeneral')) ? 'active' : '' }}"><i
                class="fa fa-cogs font-18 align-middle mr-2"></i>General Settings<br> 
                <span class="font-weight-light mt-2">
                    Roles, fields,  groups, agents, 
            </span>
            </a>
    </div>

</div>