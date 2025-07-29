<?php
namespace App\Core\Service;

include_once '../src/Core/KernelServiceInterface.php';

use App\Core\KernelServiceInterface;

class TemplatesCachingService implements KernelServiceInterface
{
    
    private string $cacheDir = '../cache/templates/';
    private int $defaultCacheTtl = 3600;

    public function __construct()
    {
        if (!file_exists($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }

    public function getCacheFilePath(string $templatePath, array $data): string
    {
        return ($this->cacheDir . $this->generateCacheKey($templatePath, $data) . '.html');
    }

    public function extractFromCache(string $cacheFilePath): ?string
    {
        $cachedContent = $this->getFromCache($cacheFilePath);
        if ($cachedContent !== null) {
            return $cachedContent;
        }

        return null;
    }

    public function cache(string $cacheFilePath, string &$content)
    {
        file_put_contents($cacheFilePath, $content);
    }
    
    public function clearCache(?string $templatePath = null): void
    {
        if ($templatePath) {
            $pattern = $this->cacheDir . md5($templatePath) . '_*.html';
            array_map('unlink', glob($pattern));
        } else {
            array_map('unlink', glob($this->cacheDir . '*.html'));
        }
    }

    private function generateCacheKey(string $templatePath, array $data): string
    {
        $dataKey = md5(json_encode($data));
        return md5($templatePath) . '_' . $dataKey;
    }
    
    private function getFromCache(string $cacheFile): ?string
    {
        if (!file_exists($cacheFile)) {
            return null;
        }
        
        $cacheAge = time() - filemtime($cacheFile);
        $ttl = $this->cacheConfig[$cacheFile] ?? $this->defaultCacheTtl;
        
        if ($ttl > 0 && $cacheAge > $ttl) {
            unlink($cacheFile);
            return null;
        }
        
        return file_get_contents($cacheFile) ?? null;
    }
}