{ pkgs }: {
    deps = [
        pkgs.php74Packages.phpcs
        pkgs.php74Packages.composer
        pkgs.nodejs
        pkgs.php74
        pkgs.cowsay
    ];
}