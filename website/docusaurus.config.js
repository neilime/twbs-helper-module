const {
  themes: { github: lightCodeTheme, dracula: darkCodeTheme },
} = require("prism-react-renderer");

// With JSDoc @type annotations, IDEs can provide config autocompletion
/** @type {import('@docusaurus/types').DocusaurusConfig} */
(
  module.exports = {
    future: {
      experimental_faster: true,
    },
    title: "TwbsHelper",
    tagline:
      "Laminas (formerly Zend Framework) module for easy integration of the Twitter Bootstrap v4+",
    url: "https://neilime.github.io",
    baseUrl: "/twbs-helper-module/",
    trailingSlash: true,
    onBrokenLinks: "ignore",
    onBrokenMarkdownLinks: "warn",
    favicon: "img/favicon.ico",
    organizationName: "neilime",
    projectName: "twbs-helper-module",
    plugins: [
      [
        "rsdoctor",
        {
          rsdoctorOptions: { disableClientServer: true },
        },
      ],
    ],
    presets: [
      [
        "@docusaurus/preset-classic",
        /** @type {import('@docusaurus/preset-classic').Options} */
        ({
          docs: {
            sidebarPath: require.resolve("./sidebars.js"),
            editUrl: "https://neilime/twbs-helper-module/edit/main/website/",
          },
          theme: {
            customCss: require.resolve("./src/css/custom.css"),
          },
        }),
      ],
    ],

    themeConfig:
      /** @type {import('@docusaurus/preset-classic').ThemeConfig} */
      ({
        navbar: {
          title: "TwbsHelper",
          logo: {
            alt: "TwbsHelper Logo",
            src: "img/logo.svg",
          },
          items: [
            {
              type: "doc",
              docId: "installation",
              position: "left",
              label: "Installation",
            },
            {
              type: "doc",
              docId: "configuration",
              position: "left",
              label: "Configuration",
            },
            {
              type: "doc",
              docId: "usage/intro",
              position: "left",
              label: "Usage",
            },
            {
              type: "doc",
              docId: "development",
              position: "left",
              label: "Development",
            },
            {
              href: "https://github.com/neilime/twbs-helper-module",
              label: "GitHub",
              position: "right",
            },
          ],
        },
        footer: {
          style: "dark",
          links: [
            {
              title: "Docs",
              items: [
                {
                  label: "Installation",
                  to: "/docs/installation",
                },
                {
                  label: "Configuration",
                  to: "/docs/configuration",
                },
                {
                  label: "Usage",
                  to: "/docs/usage",
                },
                {
                  label: "Development",
                  to: "/docs/development",
                },
              ],
            },
            {
              title: "ESCEMI",
              items: [
                {
                  label: "www.escemi.com",
                  href: "https://www.escemi.com/",
                },
                {
                  label: "Linkedin",
                  href: "https://www.linkedin.com/company/escemi",
                },
                {
                  label: "Malt",
                  href: "https://www.malt.fr/profile/emilienescalle",
                },
              ],
            },
            {
              title: "More",
              items: [
                {
                  label: "Github",
                  href: "https://github.com/escemi-tech",
                },
                {
                  label: "BuildAndRun",
                  href: "https://www.build-and-run.fr/",
                },
              ],
            },
          ],
          copyright: `Copyright © ${new Date().getFullYear()} TwbsHelper.`,
        },
        prism: {
          theme: lightCodeTheme,
          darkTheme: darkCodeTheme,
          additionalLanguages: ["php"],
        },
      }),
  }
);
