- Add `composer require mitydigital/sitemapamic`
- Change the render of SEO fields
- Add heading fieldset and import into page_builder 
- Add bard render template _bard_content.antlers.html {{ partial:if_exists src="_bard_content.antlers.html" :content="my_bard_field" }} use fallback for non-set bard
- Add bard-content into classes
- Add OG stuff from emcarter
- Remove default container and replace with class based max-w-
- Add tailwind forms and basic input css into site.css

```
.bard-content {
        /* Offset the top margin else extra whitespace */
        @apply md:-mt-8;

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            @apply mt-8 mb-5;
        }

        h1 {
            @apply text-6xl;
        }

        h2 {
            @apply text-5xl;
        }

        h3 {
            @apply text-4xl;
        }

        h4 {
            @apply text-3xl;
        }

        h5 {
            @apply text-2xl;
        }

        p {
            @apply text-2xl mt-6
        }

        p>a {
            @apply underline
        }

        ol, ul {
            @apply pl-6;
        }

        ol {
            @apply list-decimal
        }

        ul {
            @apply list-disc
        }

        ol>li>p,
        ul>li>p {
            @apply mt-2
        }

        ol li p:last-of-type,
        ul li p:last-of-type {
            @apply mb-0;
        }
    }
```

- Remove html source from bard defaults, add link
- Install statamic responsive images `composer require spatie/statamic-responsive-images`
- Add helpers file from vetshopsital
- Add vite config
```js
    server: {
        hmr: {
            host: 'localhost',
        },
        watch: {
            ignored: ['**/content/collections/**'], // Ignore changes in specific directories
        },
    }
});
```