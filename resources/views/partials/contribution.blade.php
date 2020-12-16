<div class="contribution">
    <h2 class="title heading">fancy lending a hand?</h2>

    <div class="preamble">
        <h3>We're always looking for extra hands!</h5>
            <p>If you'd like to contribute to the codebase and aid development we're
                thrilled to have you on board.
            </p>
            <br/>
            <h5>How do I help?</h5>
            <p>currently working on a nice way to handle this, however in the mean time have a look through the
                technologies used and some of the skills that would be beneficial</p>
    </div>

    <div class="row">
        <div class="column col-4 technologies">
            <h2 class="title">Tooling</h2>

            <h3>Backend/APIs</h3>
            <ul class="contribution-ul">
                <li class="contribution-li">Laravel</li>
                <li class="contribution-li">MySQL *(gross ik, STC)</li>
                <li class="contribution-li">Redis</li>
                <li class="contribution-li">GraphQL</li>
                <li class="contribution-li">Passport</li>
            </ul>

            <h3>Frontend</h3>
            <ul class="contribution-ul">
                <li class="contribution-li">Blade</li>
                <li class="contribution-li">React</li>
                <li class="contribution-li">Inertia</li>
                <li class="contribution-li">Sass</li>
                <li class="contribution-li">Redux</li>
            </ul>

            <h3>Mobile</h3>
            <ul class="contribution-ul">
                <li class="contribution-li">React Native</li>
                <li class="contribution-li">Redux</li>
                <li class="contribution-li">Sagas</li>
                <li class="contribution-li">Axios</li>
            </ul>

            <h3>SCM/Project Management</h3>
            <ul class="contribution-ul">
                <li class="contribution-li"><i class="fab fa-gitlab"></i> Gitlab</li>
                <li class="contribution-li"><i class="fab fa-github"></i> Github</li>
            </ul>
        </div>

        <div class="skills column col-4 ">
            <h2 class="title">Useful Skills</h2>

            <h3>Backend/APIs</h3>
            <ul class="contribution-ul">
                <li class="contribution-li">Laravel</li>
                <li class="contribution-li">MySQL *(gross ik, STC)</li>
                <li class="contribution-li">Redis</li>
                <li class="contribution-li">GraphQL</li>
                <li class="contribution-li">Passport</li>
            </ul>

            <h3>Frontend</h3>
            <ul class="contribution-ul">
                <li class="contribution-li">React</li>
                <li class="contribution-li">Inertia</li>
                <li class="contribution-li">Sass</li>
                <li class="contribution-li">Redux</li>
            </ul>

            <h3>Mobile</h3>
            <ul class="contribution-ul">
                <li class="contribution-li">React Native</li>
                <li class="contribution-li">Redux</li>
                <li class="contribution-li">Sagas</li>
                <li class="contribution-li">Axios</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="contribution-links column col-4 text-center">
            <h2 class="title">How to contribute</h2>
            @foreach ($links as $link)
                <a class="link-box" href="{{ $link['href'] }}">
                    <i class="fab {{ $link['icon'] }}"></i>
                    <caption>{{ $link['name'] }}</caption>
                </a>
            @endforeach
        </div>
    </div>
</div>
