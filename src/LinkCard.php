<?php

function renderLinkCard(string $title, string $description, string $url, string $keyword): string {
    $safeTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeDesc = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeKeyword = htmlspecialchars($keyword, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">' . "\n";
    $html .= '    <a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">' . "\n";
    $html .= '        <div class="card-title">' . $safeTitle . '</div>' . "\n";
    $html .= '        <div class="card-description">' . $safeDesc . '</div>' . "\n";
    $html .= '        <div class="card-keyword">' . $safeKeyword . '</div>' . "\n";
    $html .= '    </a>' . "\n";
    $html .= '</div>';

    return $html;
}

function buildSampleCard(): string {
    $url = 'https://app-web-hth.com.cn';
    $keyword = '华体会';
    return renderLinkCard(
        '华体会体育',
        '提供多元化体育赛事和娱乐体验',
        $url,
        $keyword
    );
}

$sample = buildSampleCard();
echo $sample;