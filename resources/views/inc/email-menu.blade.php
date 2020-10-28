            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><a href="/dashboard/compose-email" class="btn btn-primary btn-block btn-lg">Compose</a></li>

                        <li class="{{ request()->is('dashboard/emails/inbox') ? 'active' : '' }}">
                            <a href="/dashboard/emails/inbox">Inbox <span class="mail-count">(21)</span></a>
                        </li>
                        <li class="{{ request()->is('dashboard/emails/starred') ? 'active' : '' }}">
                            <a href="/dashboard/emails/starred">Starred</a>
                        </li>
                        <li class="{{ request()->is('dashboard/emails/sent') ? 'active' : '' }}">
                            <a href="/dashboard/emails/sent">Sent Mail</a>
                        </li>
                        <li class="{{ request()->is('dashboard/emails/draft') ? 'active' : '' }}">
                            <a href="/dashboard/emails/draft">Draft <span class="mail-count">(8)</span></a>
                        </li>
                        <li class="{{ request()->is('dashboard/emails/trash') ? 'active' : '' }}">
                            <a href="/dashboard/emails/trash">Trash</a>
                        </li>
                        <li class="menu-title">Label <a href="#" class="add-user-icon"><i class="fa fa-plus"></i></a></li>
                        <li>
                            <a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
                        </li>
                    </ul>
                </div>
            </div>