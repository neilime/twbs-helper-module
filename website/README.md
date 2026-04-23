# Website

This website is built with [Docusaurus 3](https://docusaurus.io/), using the current `faster` build pipeline and v4 migration flags enabled in the site config.

### Installation

```bash
npm install
```

### Local Development

```bash
npm start
```

This starts a local development server with live reload.

### Typecheck

```bash
npm run typecheck
```

### Build

```bash
npm run build
```

This generates the static site in the `build` directory.

### Deployment

```bash
GIT_USER=<your-github-username> USE_SSH=true npm run deploy
```

If you publish to GitHub Pages, this builds the site and pushes it to the `gh-pages` branch.
