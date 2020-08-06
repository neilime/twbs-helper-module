<?php

const BOOTSTRAP_VERSION = '4.5';
const BOOTSTRAP_URL = 'https://getbootstrap.com/docs/' . BOOTSTRAP_VERSION;
$sReadmePath = __DIR__ . '/../../README.md';
$sIndexPagePath = __DIR__ . '/../../website/src/pages/index.js';


$sReadmeContent = file_get_contents($sReadmePath);
$sIndexPageContent = file_get_contents($sIndexPagePath);
$sNewIndexPageContent = preg_replace('/(const readmeContent = `).*(`;)/is', '$1' . $sReadmeContent . '$2', $sIndexPageContent);
file_put_contents($sIndexPagePath, $sNewIndexPageContent);
