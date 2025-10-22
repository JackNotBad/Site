<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImageUploader
{
    private string $targetDirectory;
    private SluggerInterface $slugger;
    private Filesystem $fs;

    public function __construct(string $targetDirectory, SluggerInterface $slugger)
    {
        $this->targetDirectory = rtrim($targetDirectory, DIRECTORY_SEPARATOR);
        $this->slugger = $slugger;
        $this->fs = new Filesystem();
    }

    public function upload(UploadedFile $file): string
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safe = $this->slugger->slug($originalName)->lower();
        $ext = $file->guessExtension() ?: $file->getClientOriginalExtension() ?: 'bin';

        $random = bin2hex(random_bytes(8));
        $filename = sprintf('%s-%s.%s', $safe, $random, $ext);

        $file->move($this->targetDirectory, $filename);

        return 'uploads/' . $filename;
    }

    public function remove(string $relativePath): void
    {
        $basename = basename($relativePath);
        $full = $this->targetDirectory . DIRECTORY_SEPARATOR . $basename;
        if ($this->fs->exists($full)) {
            $this->fs->remove($full);
        }
    }

    public function getFilenameFromRelativePath(string $relativePath): string
    {
        return basename($relativePath);
    }
}
