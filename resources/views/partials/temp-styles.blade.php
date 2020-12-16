<style>
    /* Utl calsses */
    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    .frame {
        /* margin-top: 50px; */
        width: 100vw;
        display: flex;
        flex-direction: column
    }

    .full-height {
        height: 100vh;
    }

    .row {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: center
    }

    .column {
        padding: 30px;
    }

    .col-8 {
        width: 60vw;
    }

    .col-7 {
        width: 52.5vw;
    }

    .col-6 {
        width: 45vw;
    }

    .col-5 {
        width: 25vw;
    }

    .col-4 {
        width: 20vw;
    }

    .col-3 {
        width: 15vw;
    }

    .col-2 {
        width: 15vw;
    }

    .col-1 {
        width: 5vw;
    }

</style>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background: #393E41;
        color: #F6F7EB;
        font-family: 'Jost', sans-serif;
        overflow-x: hidden;
        text-transform: lowercase;
    }

    nav {
        background: #1A1D1E;
        border-bottom: 3px solid #9590A8;
        width: 100vw;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .title {
        font-family: 'Abril Fatface', cursive;
        font-weight: normal;
    }

    .calendar-frame {
        width: 100%;
        min-height: 400px;
        display: flex;
        flex-direction: column
    }

    .calendar {
        width: 600px;
        height: 350px;
        padding: 25px;
        border-radius: 15px;
        border: 3px solid #E94F37;
        background: #F6F7EB;
    }

    .date {
        font-weight: 700;
        text-transform: lowercase;
        font-size: 24px;
        letter-spacing: 2.1px;
    }

    .time {
        font-weight: 400;
        text-transform: lowercase;
        letter-spacing: 13.1px;
    }

    .greeting {
        font-size: 48px;
        font-weight: 700;
        letter-spacing: 2.1px;
        font-style: italic;
    }

    nav .title {
        font-size: 40px;
        padding: 3px;
    }

    nav .inner {
        width: 70vw;
    }

    .row.hero {
        min-height: 80vh;
        background: linear-gradient(45deg, #0a7e9a75, rgb(136 38 12 / 57%)), url("https://source.unsplash.com/random/1920x1080?abstract");
        background-size: cover;
        justify-content: center;
        align-items: flex-end;
        background-attachment: fixed;
    }

    .hero.half {
        height: 40vh;
    }

    .recent-moods-frame .title {
        font-size: 48px;
    }

    .quote-frame .title {
        margin-bottom: 15px;
        padding: 6px;
        border-bottom: 2px solid grey;
        font-size: 36px;
    }

    .module .body {
        font-style: italic;
    }

    .quote {
        font-size: 19px;
        line-height: 150%;
        letter-spacing: 0.7px;
        font-weight: 100;
    }

    .quote .caption {
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        color: grey;
    }

    .mood-day {
        width: 5vw;
        height: 5vh;
    }

    .mood-row {
        display: flex;
    }

    .moood-reminder {
        background: #F28482;
        justify-content: space-between;
        align-items: center;
    }

    .moood-reminder .inner {
        display: flex;
        justify-content: center;
        padding: 5px;
        align-items: center;
    }

    .question {
        font-size: 16px;
        FONT-WEIGHT: 600;
        margin-right: 11px;
    }

    .moood-reminder .column {
        padding: 0px;
        /* display: flex; */
        /* justify-content: center; */
        align-items: center;
        height: 100%;
    }

    .launch-button {
        height: 22px;
        width: 22px;
        background: #F6F7EB;
        display: flex;
        border-radius: 50%;
    }

    .launch-button .fas.fa-arrow-right {
        color: #F28482;
        margin: auto;
    }

    .dismiss-button {
        width: 16px;
        height: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        /* padding: 5px; */
        background: #F6F7EB;
        margin: auto;
        color: #F28482;
        border-radius: 50%;
    }

    .brand.biggest {
        font-size: 6vw;
    }

    .brand .subtext {
        color: #F6F7EB;
        font-size: 22px;
    }

    .subtext {
        font-family: 'Jost', sans-serif;
        font-style: italic;
    }

    .contribution .heading {
        font-size: 2.5vw;
        margin-bottom: 40px;
        text-align: left;
        padding-top: 20px;
    }

    h2.title.heading {}

    .preamble {
        max-width: 580px;
        /* margin: auto; */
    }

    .contribution {
        /* text-align: center; */
    }

    .preamble h3 {
        font-size: 24px;
    }

    .preamble h5 {
        font-size: 20px;
    }

    li.contribution-li {
        list-style-type: none;
    }

    .technologies .title,
    .skills .title {
        margin-bottom: 20px;
    }

    ul.contribution-ul {
        margin-left: 10px;
        margin-bottom: 20px;
    }

    footer {
        background: #1A1D1E;
        border-top: 3px solid #9590A8;
    }

    .lovely-does-it {
        color: #A63446;
    }

    .made-with-love a {
        color: inherit;
        text-decoration: none;
    }

</style>
<style>
    /* media queries */
    @media only screen and (max-width: 1400px) {
        .column {
            padding: 30px;
        }

        .col-8 {
            width: 80vw;
        }

        .col-7 {
            width: 70vw;
        }

        .col-6 {
            width: 60vw;
        }

        .col-5 {
            width: 50vw;
        }

        .col-4 {
            width: 40vw;
        }

        .col-3 {
            width: 30vw;
        }

        .col-2 {
            width: 20vw;
        }

        .col-1 {
            width: 10vw;
        }

        nav .inner {
            width: 90vw;
        }
    }

</style>
