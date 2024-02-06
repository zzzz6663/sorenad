<header id="header" class="home_header">
    <div class="tarlanweb_center">
        <div class="top_header">

            <div class="logo">
                <figure><a href="{{ route("home")}}"><img src="/site/images/logo.png" width="150" height="42" alt="تبلیغات"></a></figure>
            </div>

            <div class="left_top_box flex">

                <div class="navicon"><i class="fa fa-bars"></i></div>

                <div class="profile_me">

                    <div class="account_show flex">
                        <img src="{{ auth()->user()->avatar() }}" class="avatar"  alt="avatar">
                            {{auth()->user()->name}}
                            {{auth()->user()->family}}
                        <svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                            <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                                <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </div>

                    <div class="account_info_box box_shdow" style="">
                        <div class="center_c">
                            <img src="{{ auth()->user()->avatar() }}" width="50" height="50" alt="">
                            <p>
                                {{auth()->user()->name}}
                                {{auth()->user()->family}}

                            </p>
                            <p> {{auth()->user()->mobile}}</p>
                        </div>
                        <div class="top_acc_b">
                            <ul>
                                <li><a href="{{ route("logout") }}"><svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="grid_system"></g>
                                            <g id="_icons">
                                                <g>
                                                    <path d="M16.6,4.2c-0.5-0.3-1.1-0.1-1.4,0.4c-0.3,0.5-0.1,1.1,0.4,1.4c2.1,1.3,3.5,3.6,3.5,6c0,3.9-3.1,7-7,7s-7-3.1-7-7    c0-2.5,1.4-4.8,3.5-6.1C9,5.6,9.2,5,8.9,4.6C8.6,4.1,8,3.9,7.5,4.2C4.7,5.8,3,8.8,3,12c0,5,4,9,9,9s9-4,9-9    C21,8.8,19.3,5.9,16.6,4.2z"></path>
                                                    <path d="M12,13c0.6,0,1-0.4,1-1V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v9C11,12.6,11.4,13,12,13z"></path>
                                                </g>
                                            </g>
                                        </svg> خروج</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="clear"></div>
</header>
