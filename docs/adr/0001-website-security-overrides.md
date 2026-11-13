# Website build dependency security overrides

Status: Accepted

Date: 2026-11-13

## Context

Docusaurus 3.10.2 is the current stable release, but its dependency ranges keep
tinypool on 1.x and both Rsdoctor bundler plugins on 0.4.x. Dependabot cannot
resolve the security updates within those ranges. The bundler's copy and CSS
minimizer plugins also retain serialize-javascript 6.x:

- [tinypool prototype pollution][tinypool], fixed in 2.1.2.
- [Rsdoctor report server access][rsdoctor], fixed in 1.5.16.
- [serialize-javascript escaping][serialize], fixed in 7.1.3.

[tinypool]: https://github.com/tinylibs/tinypool/security/advisories/GHSA-85c8-ppgw-ccpr
[rsdoctor]: https://github.com/web-infra-dev/rsdoctor/security/advisories/GHSA-jmg2-rcxh-w8q3
[serialize]: https://github.com/advisories/GHSA-m5mm-p8h7-m29v

## Decision

Use parent-scoped npm overrides in the
[website manifest](../../website/package.json) for tinypool, both Rsdoctor plugins
and serialize-javascript. Keep the plugins on the same release line and retain
`disableClientServer: true`. The committed lockfile records the exact
versions. This preserves the existing SSG workers and build analysis without
waiting for Docusaurus to widen its dependency ranges or suppressing the alerts.

## Consequences

These overrides cross upstream major-version constraints, so dependency updates
must retain the website typecheck and production build checks. Validation on
2026-11-13 used Node.js 26, tinypool 2.2.0, Rsdoctor 1.6.5 and
serialize-javascript 7.1.4; the build exercised two SSG workers and generated the
Rsdoctor reports. Tinypool 2 requires Node.js 20
or a supported release from 22 onward; serialize-javascript 7 requires Node.js 20
or later. The website build satisfies both requirements.

Remove each override when Docusaurus accepts a patched release through its own
dependency range, then regenerate the lockfile and rerun the same checks.
