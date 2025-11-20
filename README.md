# Dexport Brandstore Theme

A custom WordPress theme built for the Brandstore platform.  
Serves as a Blocksy-based child theme with additional layout logic, templates, and styling for Brandstore.

## Features
- Blocksy child theme architecture
- Custom templates and layout overrides
- Custom CSS / JS integrations
- Brandstore-specific patterns and styling
- ACF + plugin integrations

## Folder Structure
- `functions.php` – theme bootstrap
- `style.css` – theme header & styles
- `/template-parts/` – reusable template snippets
- `/assets/` – CSS, JS, images
- `/inc/` – theme-specific functions

## Development Workflow
This theme is synced with GitHub and deployed to the server using symlinks.

**Local → GitHub → Server**  
To deploy changes:
1. `git push`
2. SSH into server
3. `git pull` inside `~/brandstore-git/dexport-brandstore-theme`

## Requirements
- WordPress
- Blocksy theme (parent)
- Brandstore plugin
