<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<style>
    body {
        background: rgb(2, 0, 36);
        background: linear-gradient(30deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 15%, rgba(0, 212, 255, 1) 100%);
        font-family: Calibri, sans-serif;
    }

    :root {
        --primary: 237, 94%, 81%;
        --background: 266, 16%, 92%;
        --background-secondary: 256, 12%, 12%;
        --background-secondary-dark: 256, 10%, 10%;
        --background-secondary-light: 257, 11%, 16%;
        --text-primary: 0, 0%, 0%;
        /* Colors */
        --black: 0, 0%, 0%;
        --white: 0, 0%, 100%;
        --quite-gray: 0, 0%, 50%;
        --grooble: 10, 28%, 93%;
        /* Sizes */
        --heading-large: 5.6rem;
        --heading-medium: 3.6rem;
        --heading-small: 2.4rem;
        --paragraph: 1.11rem;
        --navbar-buttons: 2.4rem;
        /* misc */
        --transition-main: .175, .685, .32;
        /* Fonts */
        --font-main: "Poppins";
    }

    /* ===========
    Variabels
   =========== */

    /* ===============
    Global Styles
   =============== */

    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    html {
        margin: 0;
        width: 100%;
        color: hsl(var(--text-primary));
        scroll-behavior: smooth;
        box-sizing: border-box;
    }

    /* ============
    Typography
   ============ */

    /* Headings */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    /* Font Size */
    h1 {
        font-size: var(--heading-large);
    }

    h2 {
        font-size: var(--heading-medium);
    }

    h3 {
        font-size: var(--heading-small);
    }

    h4 {
        font-size: calc(var(--heading-small) - .2rem);
    }

    h5 {
        font-size: calc(var(--heading-small) - .4rem);
    }

    h6 {
        font-size: calc(var(--heading-small) - .6rem);
    }

    /* Font Weight */
    h1,
    h2 {
        font-weight: 900;
    }

    h3,
    h4,
    h5,
    h6 {
        font-weight: 800;
    }

    /* Paragraphs */
    p {
        margin: 0;
        font-size: var(--paragraph);
    }

    /* Links */
    a {
        color: hsla(var(--primary), 1);
        font-size: var(--paragraph);
        text-decoration: underline;
    }

    a:visited {
        color: hsla(var(--primary), .5);
    }

    /* =========
    Buttons
   ========= */

    button {
        padding: .8em 1.2em;
        border: 1px solid hsl(var(--black));
        background-color: hsl(var(--background));
        font-size: var(--paragraph);
        cursor: pointer;
        outline: none;
    }

    button:focus {
        box-shadow:
            0 0 0 2px hsl(var(--black)),
            0 0 0 3px hsl(var(--white));
        border: 1px solid transparent;
    }

    /* =======
    Lists
   ======= */

    ul,
    ol {
        margin: 1em 0;
    }

    /* =======
    Forms
   ======= */

    form {
        margin: 0;
    }

    fieldset {
        margin: 0;
        padding: .5em 0;
        border: none;
    }

    input {
        padding: .8em 1.2em;
        font-size: var(--paragraph);
        background-color: hsl(var(--grooble));
        border: 2px solid hsl(var(--grooble));
        outline: none;
    }

    textarea {
        padding: .8em 1.2em;
        font-size: var(--paragraph);
        background-color: hsl(var(--grooble));
        border: 2px solid hsl(var(--grooble));
        outline: none;
    }

    input,
    textarea {
        transition: all .2s ease-in-out;
    }

    input:hover,
    input:focus,
    textarea:hover,
    textarea:focus {
        box-shadow:
            0 0 0 2px hsl(var(--black)),
            0 0 0 3px hsl(var(--white));
        border: 2px solid transparent;
    }

    select {
        padding: .8em 1.2em;
        border: 1px solid hsl(var(--black));
        font-size: var(--paragraph);
        outline: none;
    }

    /* =========
    Classes
   ========= */

    /* ================
    Global classes
   ================ */

    /* =========
    Flexbox
   ========= */

    .flexbox {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flexbox-left {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .flexbox-right {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    /* Columns */
    .flexbox-col {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .flexbox-col-left {
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        align-items: flex-start;
    }

    .flexbox-col-left-ns {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: flex-start;
    }

    .flexbox-col-right {
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
        align-items: flex-end;
    }

    .flexbox-col-start-center {
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        align-items: center;
    }

    /* Spacings */
    .flexbox-space-bet {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* =========
    Classes
   ========= */

    .view-width {
        width: 70%;
    }


    /* =============
    ::Selectors
   ============= */

    /* Selection */
    ::selection {
        color: hsl(var(--white));
        background: hsla(var(--primary), .33);
    }

    /* Scrollbar */
    ::-webkit-scrollbar-track {
        background-color: hsl(var(--background));
    }

    ::-webkit-scrollbar {
        width: 8px;
        background-color: hsl(var(--background));
    }

    ::-webkit-scrollbar-thumb {
        background-color: hsl(var(--primary));
    }

    /* ===============
    5. @keyframes
   =============== */

    /* ==============
    @media rules
   ============== */

    @media only screen and (max-width: 1660px) {
        :root {
            /* Sizes */
            --heading-large: 5.4rem;
            --heading-medium: 3.4rem;
            --heading-small: 2.2rem;
        }
    }

    @media only screen and (max-width: 1456px) {
        :root {
            /* Sizes */
            --heading-large: 5.2rem;
            --heading-medium: 3.2rem;
            --heading-small: 2rem;
        }

        .view-width {
            width: 80%;
        }
    }

    @media only screen and (max-width: 1220px) {
        .view-width {
            width: 70%;
        }
    }

    @media only screen and (max-width: 1024px) {
        :root {
            /* Sizes */
            --heading-large: 5rem;
            --heading-medium: 3rem;
            --heading-small: 1.8rem;
        }

        .view-width {
            width: 75%;
        }
    }

    @media only screen and (max-width: 756px) {
        :root {
            /* Sizes */
            --heading-large: 4rem;
            --heading-medium: 2.6rem;
            --heading-small: 1.6rem;
            --paragraph: 1rem;
            --navbar-buttons: 2.2rem;
        }

        .view-width {
            width: calc(100% - 5em);
        }
    }

    @media only screen and (max-width: 576px) {
        .view-width {
            width: calc(100% - 3em);
        }
    }

    @media only screen and (max-width: 496px) {}


    .button-3 {
        appearance: none;
        background-color: #2ea44f;
        border: 1px solid rgba(27, 31, 35, .15);
        border-radius: 6px;
        box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        padding: 6px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: middle;
        white-space: nowrap;
    }

    .button-3:focus:not(:focus-visible):not(.focus-visible) {
        box-shadow: none;
        outline: none;
    }

    .button-3:hover {
        background-color: #2c974b;
    }

    .button-3:focus {
        box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
        outline: none;
    }

    .button-3:disabled {
        background-color: #94d3a2;
        border-color: rgba(27, 31, 35, .1);
        color: rgba(255, 255, 255, .8);
        cursor: default;
    }

    .button-3:active {
        background-color: #298e46;
        box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
    }

    P {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .flex {
        display: flex;
    }

    .items-center {
        align-items: center;
    }

    .min-h-screen {
        min-height: 100vh;
    }

    .login-container {
        background-color: rgb(243, 243, 243);
        border-radius: 1.25rem;
        /* 20px / 16px = 1.25rem */
        padding: 2.5rem;
        /* 4rem / 16px = 2.5rem */
        box-shadow: 0.4375rem 0.4375rem rgba(0, 0, 0, 0.151);
        /* 7px / 16px = 0.4375rem */
    }


    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .w-full {
        width: 100%;
    }

    .max-w-sm {
        max-width: 24rem;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .space-y-4>+ {
        margin-top: 1rem;
    }

    .text-center {
        text-align: center;
    }

    .space-x-2>+ {
        margin-left: 0.5rem;
    }

    .text-lg {
        font-size: 1.125rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .text-3xl {
        font-family: Calibri, sans-serif;
        font-size: 2.8125rem;
        /* 45px / 16px = 2.8125rem */
    }

    .grid {
        display: grid;
    }

    .grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .gap-4 {
        gap: 1rem;
    }

    .space-y-2>+ {
        margin-top: 0.5rem;
    }

    .text-sm-nip {
        font-size: 0.9375rem;
        /* 15px / 16px = 0.9375rem */
    }


    .text-sm {
        font-size: 0.9375rem;
        /* 15px / 16px = 0.9375rem */
        font-weight: bold;
    }


    .font-medium {
        font-weight: 500;
        font-weight: bold;
    }

    .w-full {
        width: 100%;
    }

    .px-3 {
        padding-left: 0.75rem;
        /* 12px / 16px = 0.75rem */
        padding-right: 0.75rem;
    }

    .py-2 {
        padding-top: 0.5rem;
        /* 8px / 16px = 0.5rem */
        padding-bottom: 0.5rem;
    }

    .border {
        border-width: 1px;
    }

    .rounded-md {
        border-radius: 10px;
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .focus\:ring:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .focus\:ring-indigo-200:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(199 210 254 / var(--tw-ring-opacity));
    }

    .text-blue-500 {
        --tw-text-opacity: 1;
        color: rgb(59 130 246 / var(--tw-text-opacity));
    }

    .hover\:underline:hover {
        text-decoration-line: underline;
    }
</style>

<body>

    <!-- Navbar -->
    <?php include "../Desarrollo%20PA/"; ?>

    <!-- Login -->

    <div class="flex items-center min-h-screen px-4">
        <div class="w-full max-w-sm mx-auto">
            <div class="login-container">
                <div class="space-y-4">
                    <div>
                        <img src="Imagenes/LogoQCA2.png" width="100%" height="100%" alt="CUCEA">
                    </div>
                    <br>
                    <div class="text-center">
                        <h1 class="text-3xl font-bold">Mi plataforma CUCEA</h1>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium" for="username">NIP</label>
                            <input class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200" id="NIP" placeholder="123456789" required type="text" />
                        </div>
                        <br><br>
                        <div class="space-y-2">
                            <label class="text-sm font-medium" for="contra">Contraseña</label>
                            <input class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200" id="contra" placeholder="123456789" required type="password" />
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <a class="text-sm-nip text-blue-500 hover:underline" href="#">Recuperar NIP.</a>
                    </div>
                    <br> <br>
                    <div class="text-center">
                        <button class="button-3">Iniciar Sesión</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </script>
</body>

</html>