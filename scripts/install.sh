#!/bin/bash
# Script d'installation pour le projet Laravel + Vite

set -e

# Installation des dépendances PHP
if [ -f composer.json ]; then
    echo "Installation des dépendances PHP..."
    composer install
fi

# Installation des dépendances Node.js
if [ -f package.json ]; then
    echo "Installation des dépendances Node.js..."
    npm install
fi

# Création du fichier .env si absent
if [ ! -f .env ]; then
    echo "Copie du .env.example vers .env..."
    cp .env.example .env 2>/dev/null || touch .env
fi

# Génération de la clé d'application Laravel
if [ -f artisan ]; then
    echo "Génération de la clé d'application..."
    php artisan key:generate || true
fi

# Migration de la base de données
if [ -f artisan ]; then
    echo "Migration de la base de données..."
    php artisan migrate || true
fi

echo "Installation terminée !"
