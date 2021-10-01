const bootstrapVersion = "4.5";
const lightCodeTheme = require("prism-react-renderer/themes/github");
const darkCodeTheme = require("prism-react-renderer/themes/dracula");

// With JSDoc @type annotations, IDEs can provide config autocompletion
/** @type {import('@docusaurus/types').DocusaurusConfig} */
(module.exports = {
  scripts: [
    "https://code.jquery.com/jquery-3.5.1.slim.min.js",
    `https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/js/bootstrap.bundle.min.js`,
  ],
  // stylesheets: [
  //   `https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/css/bootstrap.min.css`,
  //   "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css",
  // ],
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
            docId: "usage/intro",
            position: "left",
            label: "Usage",
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
                label: "Usage",
                to: "/docs/usage",
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
});
