<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="generator" content="Astro v3.5.5"><!-- <link rel="preload" as="image" href={src} alt="Hero" /> -->
    <title>PHP Example App</title>
    <link rel="canonical" href="https://astroship.web3templates.com/">
    <meta name="description" content="Astroship is a starter website template for Astro built with TailwindCSS.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Astroship - Starter Template for Astro">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://astroship.web3templates.com/opengraph.jpg">
    <meta property="og:url" content="https://astroship.web3templates.com/">
    <meta property="og:image:url" content="https://astroship.web3templates.com/opengraph.jpg">
    <meta property="og:image:alt" content="Astroship Homepage Screenshot">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@web3templates">
    <meta name="twitter:creator" content="@surjithctly">
    <link rel="stylesheet" href="assets/main.css" />
</head>

<body>
    <div class="max-w-screen-xl mx-auto px-5">
        <header class="flex flex-col lg:flex-row justify-between items-center my-5">
            <div class="flex w-full lg:w-auto items-center justify-between"> <a href="/" class="text-lg"><span
                        class="font-bold text-slate-800">PHP</span><span class="text-slate-500">ship</span> </a>
                <div class="block lg:hidden"> <button id="astronav-menu" aria-label="Toggle Menu"> <svg
                            fill="currentColor" class="w-4 h-4 text-gray-800" width="24" height="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Toggle Menu</title>
                            <path class="astronav-close-icon astronav-toggle hidden" fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M18.278 16.864a1 1 0 01-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 01-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 011.414-1.414l4.829 4.828 4.828-4.828a1 1 0 111.414 1.414l-4.828 4.829 4.828 4.828z">
                            </path>
                            <path class="astronav-open-icon astronav-toggle" fill-rule="evenodd"
                                d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z">
                            </path>
                        </svg> </button> </div>
            </div>
            <nav class="astronav-items astronav-toggle hidden w-full lg:w-auto mt-2 lg:flex lg:mt-0">
                <ul class="flex flex-col lg:flex-row lg:gap-3">
                    <li class="relative">
                        <menu class="astronav-dropdown group" aria-expanded="false"> <button
                                class="flex items-center gap-1 w-full lg:w-auto lg:px-3 py-2 text-gray-600 hover:text-gray-900">
                                <span>Features</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                    class="w-3 h-3 mt-0.5 group-open:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                </svg> </button>
                            <div class="astronav-dropdown dropdown-toggle hidden" aria-expanded="false">
                                <div class="lg:absolute w-full lg:w-48 z-10 lg:left-0 origin-top-left">
                                    <div
                                        class="px-3 lg:py-2 lg:bg-white lg:rounded-md lg:shadow lg:border flex flex-col">
                                        <a href="/" class="py-1 text-gray-600 hover:text-gray-900"> Action </a><a
                                            href="#" class="py-1 text-gray-600 hover:text-gray-900"> Another action
                                        </a><a href="#" class="py-1 text-gray-600 hover:text-gray-900"> Dropdown Submenu
                                        </a><a href="/404" class="py-1 text-gray-600 hover:text-gray-900"> 404 Page </a>
                                    </div>
                                </div>
                            </div>
                        </menu>
                    </li>
                    <li> <a href="/pricing" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                            <span> Pricing</span> </a> </li>
                    <li> <a href="/about" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                            <span> About</span> </a> </li>
                    <li> <a href="/blog" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                            <span> Blog</span> </a> </li>
                    <li> <a href="/contact" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                            <span> Contact</span> </a> </li>
                </ul>
                <div class="lg:hidden flex items-center mt-3 gap-4"> <a href="#"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-4 py-2 bg-gray-100 hover:bg-gray-200   border-2 border-transparent">Log
                        in </a> <a href="#"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-4 py-2 bg-black text-white hover:bg-gray-800  border-2 border-transparent">Sign
                        up </a> </div>
            </nav>
            <div>
                <div class="hidden lg:flex items-center gap-4"> <a href="#">Log in</a> <a href="#"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-4 py-2 bg-black text-white hover:bg-gray-800  border-2 border-transparent">Sign
                        up </a> </div>
            </div>
        </header>
    </div>
    <div class="max-w-screen-xl mx-auto px-5">
        <?php
            passthru("node ./astro-project/render.mjs")
        ?>
        <main class="grid lg:grid-cols-2 place-items-center pt-16 pb-8 md:pt-12 md:pb-24">
            <div class="py-6 md:order-1 hidden md:block">
                <picture>
                    <source
                        srcset="assets/hero.webp 200w, assets/hero.webp 400w, assets/hero.webp 600w"
                        type="image/webp" sizes="(max-width: 800px) 100vw, 620px"> <img
                        src="assets/hero.png"
                        srcset="assets/hero.png 200w, assets/hero.png 400w, assets/hero.png 600w"
                        alt="Astronaut in the air" sizes="(max-width: 800px) 100vw, 620px" loading="eager" width="520"
                        height="424" decoding="async">
                </picture>
            </div>
            <div>
                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold lg:tracking-tight xl:tracking-tighter">
                    Marketing website done with PHP
                </h1>
                <p class="text-lg mt-4 text-slate-600 max-w-xl">
                    Astroship is a starter template for startups, marketing websites & landing
                    pages.<wbr> Built with Astro.build and TailwindCSS. You can quickly
      create any website with this starter.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row gap-3"> <a
                        href="https://web3templates.com/templates/astroship-starter-website-template-for-astro"
                        target="_blank" rel="noopener"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-black text-white hover:bg-gray-800  border-2 border-transparent flex gap-1 items-center justify-center">
                        <svg viewBox="0 0 24 24" class="text-white w-5 h-5" astro-icon="bx:bxs-cloud-download">
                            <path fill="currentColor"
                                d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z" />
                        </svg>
                        Download for Free
                    </a> <a href="https://github.com/surjithctly/astroship" rel="noopener" target="_blank"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white border-2 border-black hover:bg-gray-100 text-black  flex gap-1 items-center justify-center">
                        <svg viewBox="0 0 24 24" class="text-black w-4 h-4" astro-icon="bx:bxl-github">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"
                                clip-rule="evenodd" />
                        </svg>
                        GitHub Repo
                    </a> </div>
            </div>
        </main>
        <div class="mt-16 md:mt-0">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                Everything you need to start a website
            </h2>
            <p class="text-lg mt-4 text-slate-600">
                Astro comes batteries included. It takes the best parts of state-of-the-art
                tools and adds its own innovations.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-16">
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-briefcase">
                        <path fill="currentColor"
                            d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v3h20V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm5 10h-4v-2H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-8v2z" />
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">Bring Your Own Framework</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Build your site using React, Svelte, Vue, Preact, web
                        components, or just plain ol&#39; HTML + JavaScript.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-window-alt">
                        <path fill="currentColor"
                            d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-3 3h2v2h-2V6zm-3 0h2v2h-2V6zM4 19v-9h16.001l.001 9H4z" />
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">100% Static HTML, No JS</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Astro renders your entire page to static HTML,
                        removing all JavaScript from your final build by default.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-data">
                        <path fill="currentColor"
                            d="M20 6c0-2.168-3.663-4-8-4S4 3.832 4 6v2c0 2.168 3.663 4 8 4s8-1.832 8-4V6zm-8 13c-4.337 0-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3c0 2.168-3.663 4-8 4z" />
                        <path fill="currentColor"
                            d="M20 10c0 2.168-3.663 4-8 4s-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3z" />
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">On-Demand Components</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Need some JS? Astro can automatically hydrate
                        interactive components when they become visible on the page. </p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-bot">
                        <path fill="currentColor"
                            d="M21 10.975V8a2 2 0 0 0-2-2h-6V4.688c.305-.274.5-.668.5-1.11a1.5 1.5 0 0 0-3 0c0 .442.195.836.5 1.11V6H5a2 2 0 0 0-2 2v2.998l-.072.005A.999.999 0 0 0 2 12v2a1 1 0 0 0 1 1v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a1 1 0 0 0 1-1v-1.938a1.004 1.004 0 0 0-.072-.455c-.202-.488-.635-.605-.928-.632zM7 12c0-1.104.672-2 1.5-2s1.5.896 1.5 2-.672 2-1.5 2S7 13.104 7 12zm8.998 6c-1.001-.003-7.997 0-7.998 0v-2s7.001-.002 8.002 0l-.004 2zm-.498-4c-.828 0-1.5-.896-1.5-2s.672-2 1.5-2 1.5.896 1.5 2-.672 2-1.5 2z" />
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">Broad Integration</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Astro supports TypeScript, Scoped CSS, CSS Modules,
                        Sass, Tailwind, Markdown, MDX, and any other npm packages.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-file-find">
                        <path fill="currentColor"
                            d="M6 22h12c.178 0 .348-.03.512-.074l-3.759-3.759A4.966 4.966 0 0 1 12 19c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5a4.964 4.964 0 0 1-.833 2.753l3.759 3.759c.044-.164.074-.334.074-.512V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z" />
                        <circle cx="12" cy="14" r="3" fill="currentColor" />
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">SEO Enabled</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Automatic sitemaps, RSS feeds, pagination and
                        collections take the pain out of SEO and syndication. It just works!</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-user">
                        <path fill="currentColor"
                            d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z" />
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">Community</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Astro is an open source project powered by hundreds
                        of contributors making thousands of individual contributions.</p>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <h2 class="text-center text-slate-500">Works with your technologies</h2>
            <div class="flex gap-8 md:gap-20 items-center justify-center mt-10 flex-wrap"> <svg viewBox="0 0 24 24"
                    class="h-8 md:h-12" astro-icon="simple-icons:react">
                    <path fill="currentColor"
                        d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38a2.167 2.167 0 0 0-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44a23.476 23.476 0 0 0-3.107-.534A23.892 23.892 0 0 0 12.769 4.7c1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442a22.73 22.73 0 0 0-3.113.538 15.02 15.02 0 0 1-.254-1.42c-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87a25.64 25.64 0 0 1-4.412.005 26.64 26.64 0 0 1-1.183-1.86c-.372-.64-.71-1.29-1.018-1.946a25.17 25.17 0 0 1 1.013-1.954c.38-.66.773-1.286 1.18-1.868A25.245 25.245 0 0 1 12 8.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933a25.952 25.952 0 0 0-1.345-2.32zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493a23.966 23.966 0 0 0-1.1-2.98c.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98a23.142 23.142 0 0 0-1.086 2.964c-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39a25.819 25.819 0 0 0 1.341-2.338zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143a22.005 22.005 0 0 1-2.006-.386c.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295a1.185 1.185 0 0 1-.553-.132c-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
                </svg> <svg viewBox="0 0 24 24" class="h-8 md:h-12" astro-icon="simple-icons:svelte">
                    <path fill="currentColor"
                        d="M10.354 21.125a4.44 4.44 0 0 1-4.765-1.767 4.109 4.109 0 0 1-.703-3.107 3.898 3.898 0 0 1 .134-.522l.105-.321.287.21a7.21 7.21 0 0 0 2.186 1.092l.208.063-.02.208a1.253 1.253 0 0 0 .226.83 1.337 1.337 0 0 0 1.435.533 1.231 1.231 0 0 0 .343-.15l5.59-3.562a1.164 1.164 0 0 0 .524-.778 1.242 1.242 0 0 0-.211-.937 1.338 1.338 0 0 0-1.435-.533 1.23 1.23 0 0 0-.343.15l-2.133 1.36a4.078 4.078 0 0 1-1.135.499 4.44 4.44 0 0 1-4.765-1.766 4.108 4.108 0 0 1-.702-3.108 3.855 3.855 0 0 1 1.742-2.582l5.589-3.563a4.072 4.072 0 0 1 1.135-.499 4.44 4.44 0 0 1 4.765 1.767 4.109 4.109 0 0 1 .703 3.107 3.943 3.943 0 0 1-.134.522l-.105.321-.286-.21a7.204 7.204 0 0 0-2.187-1.093l-.208-.063.02-.207a1.255 1.255 0 0 0-.226-.831 1.337 1.337 0 0 0-1.435-.532 1.231 1.231 0 0 0-.343.15L8.62 9.368a1.162 1.162 0 0 0-.524.778 1.24 1.24 0 0 0 .211.937 1.338 1.338 0 0 0 1.435.533 1.235 1.235 0 0 0 .344-.151l2.132-1.36a4.067 4.067 0 0 1 1.135-.498 4.44 4.44 0 0 1 4.765 1.766 4.108 4.108 0 0 1 .702 3.108 3.857 3.857 0 0 1-1.742 2.583l-5.589 3.562a4.072 4.072 0 0 1-1.135.499m10.358-17.95C18.484-.015 14.082-.96 10.9 1.068L5.31 4.63a6.412 6.412 0 0 0-2.896 4.295 6.753 6.753 0 0 0 .666 4.336 6.43 6.43 0 0 0-.96 2.396 6.833 6.833 0 0 0 1.168 5.167c2.229 3.19 6.63 4.135 9.812 2.108l5.59-3.562a6.41 6.41 0 0 0 2.896-4.295 6.756 6.756 0 0 0-.665-4.336 6.429 6.429 0 0 0 .958-2.396 6.831 6.831 0 0 0-1.167-5.168z" />
                </svg> <svg viewBox="0 0 24 24" class="h-8 md:h-14" astro-icon="simple-icons:tailwindcss">
                    <path fill="currentColor"
                        d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z" />
                </svg> <svg viewBox="0 0 24 24" class="h-8 md:h-16" astro-icon="simple-icons:alpinedotjs">
                    <path fill="currentColor"
                        d="m24 12-5.72 5.746-5.724-5.741 5.724-5.75L24 12zM5.72 6.254 0 12l5.72 5.746h11.44L5.72 6.254z" />
                </svg> <svg viewBox="0 0 24 24" class="h-8 md:h-12" astro-icon="simple-icons:vercel">
                    <path fill="currentColor" d="M24 22.525H0l12-21.05 12 21.05z" />
                </svg> <svg viewBox="0 0 24 24" class="h-8 md:h-12" astro-icon="simple-icons:astro">
                    <path fill="currentColor"
                        d="M16.074 16.86c-.72.616-2.157 1.035-3.812 1.035-2.032 0-3.735-.632-4.187-1.483-.161.488-.198 1.046-.198 1.402 0 0-.106 1.75 1.111 2.968 0-.632.513-1.145 1.145-1.145 1.083 0 1.082.945 1.081 1.712v.069c0 1.164.711 2.161 1.723 2.582a2.347 2.347 0 0 1-.236-1.029c0-1.11.652-1.523 1.41-2.003.602-.383 1.272-.807 1.733-1.66a3.129 3.129 0 0 0 .378-1.494 3.14 3.14 0 0 0-.148-.954zM15.551.6c.196.244.296.572.496 1.229l4.368 14.347a18.18 18.18 0 0 0-5.222-1.768L12.35 4.8a.37.37 0 0 0-.71.002l-2.81 9.603a18.175 18.175 0 0 0-5.245 1.771L7.974 1.827c.2-.656.3-.984.497-1.227a1.613 1.613 0 0 1 .654-.484C9.415 0 9.757 0 10.443 0h3.135c.686 0 1.03 0 1.32.117A1.614 1.614 0 0 1 15.55.6z" />
                </svg> </div>
        </div>
        <div
            class="bg-black p-8 md:px-20 md:py-20 mt-20 mx-auto max-w-5xl rounded-lg flex flex-col items-center text-center">
            <h2 class="text-white text-4xl md:text-6xl tracking-tight">
                Build faster websites.
            </h2>
            <p class="text-slate-400 mt-4 text-lg md:text-xl">
                Pull content from anywhere and serve it fast with Astro's next-gen island
                architecture.
            </p>
            <div class="flex mt-5"> <a href="#"
                    class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white text-black   border-2 border-transparent">Get
                    Started </a> </div>
        </div>
    </div>
    <footer class="my-20">
        <p class="text-center text-sm text-slate-500">
            Copyright © 2023 Astroship. All rights reserved.
        </p>
        <!--
    Can we ask you a favor 🙏
    Please keep this backlink on your website if possible.
    or Purchase a commercial license from https://web3templates.com
  -->
        <p class="text-center text-xs text-slate-500 mt-1">
            Made by <a href="https://web3templates.com" target="_blank" rel="noopener" class="hover:underline">
                Web3Templates
            </a> </p>
    </footer>
</body>

</html>