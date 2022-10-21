{{-- <link rel="stylesheet" href="{{ asset('css/all.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/regular.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/solid.css') }}"> --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('css/style_tambahan.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/style_tambahan.css') }}">
{{-- <link rel="stylesheet" href="asset('build/assets/css/fontawesome.css')"> --}}
<script src="https://kit.fontawesome.com/b88a3c6b69.js" crossorigin="anonymous"></script>



<style>
    /* ! tailwindcss v3.1.8 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    ::after,
    ::before {
        --tw-content: ''
    }

    html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        tab-size: 4;
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    }

    body {
        margin: 0;
        line-height: inherit
    }

    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    b,
    strong {
        font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0
    }

    button,
    select {
        text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none
    }

    :-moz-focusring {
        outline: auto
    }

    :-moz-ui-invalid {
        box-shadow: none
    }

    progress {
        vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    summary {
        display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
        margin: 0
    }

    fieldset {
        margin: 0;
        padding: 0
    }

    legend {
        padding: 0
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    textarea {
        resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
        opacity: 1;
        color: #9ca3af
    }

    [role=button],
    button {
        cursor: pointer
    }

    :disabled {
        cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
        display: block;
        vertical-align: middle
    }

    img,
    video {
        max-width: 100%;
        height: auto
    }

    *,
    ::before,
    ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    ::-webkit-backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    .container {
        width: 100%
    }

    @media (min-width: 640px) {
        .container {
            max-width: 640px
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 1024px
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px
        }
    }

    @media (min-width: 1536px) {
        .container {
            max-width: 1536px
        }
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .inset-0 {
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px
    }

    .z-10 {
        z-index: 10
    }

    .order-first {
        order: -9999
    }

    .-m-4 {
        margin: -1rem
    }

    .-m-1 {
        margin: -0.25rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .mx-2 {
        margin-left: 0.5rem;
        margin-right: 0.5rem
    }

    .mb-4 {
        margin-bottom: 1rem
    }

    .mr-5 {
        margin-right: 1.25rem
    }

    .ml-1 {
        margin-left: 0.25rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .mb-20 {
        margin-bottom: 5rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .mb-16 {
        margin-bottom: 4rem
    }

    .mb-2 {
        margin-bottom: 0.5rem
    }

    .mb-6 {
        margin-bottom: 1.5rem
    }

    .mb-8 {
        margin-bottom: 2rem
    }

    .mb-1 {
        margin-bottom: 0.25rem
    }

    .mb-3 {
        margin-bottom: 0.75rem
    }

    .mt-1 {
        margin-top: 0.25rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .mb-5 {
        margin-bottom: 1.25rem
    }

    .mt-3 {
        margin-top: 0.75rem
    }

    .mb-10 {
        margin-bottom: 2.5rem
    }

    .mr-2 {
        margin-right: 0.5rem
    }

    .mt-2 {
        margin-top: 0.5rem
    }

    .ml-3 {
        margin-left: 0.75rem
    }

    .block {
        display: block
    }

    .flex {
        display: flex
    }

    .inline-flex {
        display: inline-flex
    }

    .hidden {
        display: none
    }

    .h-4 {
        height: 1rem
    }

    .h-screen {
        height: 100vh
    }

    .h-1 {
        height: 0.25rem
    }

    .h-full {
        height: 100%
    }

    .h-32 {
        height: 8rem
    }

    .h-10 {
        height: 2.5rem
    }

    .h-5 {
        height: 1.25rem
    }

    .w-full {
        width: 100%
    }

    .w-4 {
        width: 1rem
    }

    .w-16 {
        width: 4rem
    }

    .w-1\/6 {
        width: 16.666667%
    }

    .w-1\/2 {
        width: 50%
    }

    .w-40 {
        width: 10rem
    }

    .w-10 {
        width: 2.5rem
    }

    .w-5 {
        width: 1.25rem
    }

    .flex-shrink-0 {
        flex-shrink: 0
    }

    .resize-none {
        resize: none
    }

    .list-none {
        list-style-type: none
    }

    .flex-col {
        flex-direction: column
    }

    .flex-wrap {
        flex-wrap: wrap
    }

    .items-end {
        align-items: flex-end
    }

    .items-center {
        align-items: center
    }

    .justify-start {
        justify-content: flex-start
    }

    .justify-center {
        justify-content: center
    }

    .divide-y> :not([hidden])~ :not([hidden]) {
        --tw-divide-y-reverse: 0;
        border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
        border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
    }

    .divide-gray-100> :not([hidden])~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(243 244 246 / var(--tw-divide-opacity))
    }

    .overflow-hidden {
        overflow: hidden
    }

    .rounded {
        border-radius: 0.25rem
    }

    .rounded-full {
        border-radius: 9999px
    }

    .rounded-lg {
        border-radius: 0.5rem
    }

    .border-0 {
        border-width: 0px
    }

    .border-4 {
        border-width: 4px
    }

    .border {
        border-width: 1px
    }

    .border-gray-200 {
        --tw-border-opacity: 1;
        border-color: rgb(229 231 235 / var(--tw-border-opacity))
    }

    .border-gray-300 {
        --tw-border-opacity: 1;
        border-color: rgb(209 213 219 / var(--tw-border-opacity))
    }

    .bg-transparent {
        background-color: transparent
    }

    .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gray-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(209 213 219 / var(--tw-bg-opacity))
    }

    .bg-green-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(34 197 94 / var(--tw-bg-opacity))
    }

    .bg-navy-1 {
        --tw-bg-opacity: 1;
        background-color: #1c4b69;
    }

    .bg-opacity-50 {
        --tw-bg-opacity: 0.5
    }

    .bg-cover {
        background-size: cover
    }

    .bg-fixed {
        background-attachment: fixed
    }

    .bg-no-repeat {
        background-repeat: no-repeat
    }

    .object-cover {
        object-fit: cover
    }

    .object-center {
        object-position: center
    }

    .p-5 {
        padding: 1.25rem
    }

    .p-10 {
        padding: 2.5rem
    }

    .p-1 {
        padding: 0.25rem
    }

    .p-2 {
        padding: 0.5rem
    }

    .px-16 {
        padding-left: 4rem;
        padding-right: 4rem
    }

    .py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem
    }

    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem
    }

    .px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem
    }

    .py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .px-8 {
        padding-left: 2rem;
        padding-right: 2rem
    }

    .py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem
    }

    .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem
    }

    .text-center {
        text-align: center
    }

    .text-base {
        font-size: 1rem;
        line-height: 1.5rem
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem
    }

    .text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
    }

    .text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem
    }

    .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem
    }

    .text-xs {
        font-size: 0.75rem;
        line-height: 1rem
    }

    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
    }

    .font-light {
        font-weight: 300
    }

    .font-medium {
        font-weight: 500
    }

    .font-semibold {
        font-weight: 600
    }

    .leading-relaxed {
        line-height: 1.625
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .leading-8 {
        line-height: 2rem
    }

    .leading-6 {
        line-height: 1.5rem
    }

    .tracking-widest {
        letter-spacing: 0.1em
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .text-green-500 {
        --tw-text-opacity: 1;
        color: rgb(34 197 94 / var(--tw-text-opacity))
    }

    .text-gray-700 {
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity))
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .text-gray-100 {
        --tw-text-opacity: 1;
        color: rgb(243 244 246 / var(--tw-text-opacity))
    }

    .text-gray-50 {
        --tw-text-opacity: 1;
        color: rgb(249 250 251 / var(--tw-text-opacity))
    }

    .opacity-0 {
        opacity: 0
    }

    .shadow {
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-lg {
        --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-md {
        --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .transition {
        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms
    }

    .transition-colors {
        transition-property: color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms
    }

    .duration-200 {
        transition-duration: 200ms
    }

    .ease-in-out {
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1)
    }

    .hover\:bg-green-600:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(22 163 74 / var(--tw-bg-opacity))
    }

    .hover\:text-gray-900:hover {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .hover\:text-gray-800:hover {
        --tw-text-opacity: 1;
        color: rgb(31 41 55 / var(--tw-text-opacity))
    }

    .hover\:opacity-100:hover {
        opacity: 1
    }

    .focus\:border-green-500:focus {
        --tw-border-opacity: 1;
        border-color: rgb(34 197 94 / var(--tw-border-opacity))
    }

    .focus\:bg-transparent:focus {
        background-color: transparent
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .focus\:ring-2:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .focus\:ring-green-200:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(187 247 208 / var(--tw-ring-opacity))
    }

    @media (prefers-color-scheme: dark) {
        .dark\:hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }
    }

    @media (min-width: 640px) {
        .sm\:mr-10 {
            margin-right: 2.5rem
        }

        .sm\:mr-4 {
            margin-right: 1rem
        }

        .sm\:ml-6 {
            margin-left: 1.5rem
        }

        .sm\:mt-0 {
            margin-top: 0px
        }

        .sm\:ml-auto {
            margin-left: auto
        }

        .sm\:w-auto {
            width: auto
        }

        .sm\:flex-row {
            flex-direction: row
        }

        .sm\:flex-nowrap {
            flex-wrap: nowrap
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }

        .sm\:text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem
        }
    }

    @media (min-width: 768px) {
        .md\:-m-2 {
            margin: -0.5rem
        }

        .md\:ml-auto {
            margin-left: auto
        }

        .md\:mb-0 {
            margin-bottom: 0px
        }

        .md\:mt-0 {
            margin-top: 0px
        }

        .md\:w-1\/2 {
            width: 50%
        }

        .md\:flex-row {
            flex-direction: row
        }

        .md\:flex-nowrap {
            flex-wrap: nowrap
        }

        .md\:items-start {
            align-items: flex-start
        }

        .md\:justify-start {
            justify-content: flex-start
        }

        .md\:p-2 {
            padding: 0.5rem
        }

        .md\:py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem
        }

        .md\:pr-16 {
            padding-right: 4rem
        }

        .md\:text-left {
            text-align: left
        }
    }

    @media (min-width: 1024px) {
        .lg\:mt-0 {
            margin-top: 0px
        }

        .lg\:mr-0 {
            margin-right: 0px
        }

        .lg\:mt-2 {
            margin-top: 0.5rem
        }

        .lg\:block {
            display: block
        }

        .lg\:inline-block {
            display: inline-block
        }

        .lg\:w-3\/4 {
            width: 75%
        }

        .lg\:w-full {
            width: 100%
        }

        .lg\:w-2\/3 {
            width: 66.666667%
        }

        .lg\:w-1\/2 {
            width: 50%
        }

        .lg\:w-1\/3 {
            width: 33.333333%
        }

        .lg\:w-1\/4 {
            width: 25%
        }

        .lg\:max-w-lg {
            max-width: 32rem
        }

        .lg\:flex-grow {
            flex-grow: 1
        }

        .lg\:flex-wrap {
            flex-wrap: wrap
        }

        .lg\:pr-24 {
            padding-right: 6rem
        }
    }

    @media (min-width: 1280px) {
        .xl\:mr-4 {
            margin-right: 1rem
        }

        .xl\:mt-0 {
            margin-top: 0px
        }

        .xl\:w-2\/4 {
            width: 50%
        }

        .xl\:flex-nowrap {
            flex-wrap: nowrap
        }
    }
</style>
