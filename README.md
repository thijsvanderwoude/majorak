# Majorak v0.3
> This is not yet production ready software. Use at your own risk.

Majorak is a minimalist ADR templating PHP web framework.

It's [ADR](https://github.com/pmjones/adr) combined with low level control without getting in the way.
A description of how ADR works can be found [here](https://github.com/pmjones/adr/blob/master/IMPLEMENTATION.md).
A better writeup is found [here](https://forum.archte.ch/laravel/t/pattern-action-domain-responder-adr).

### What works:
- [x] ADR pattern (v0.1)
- [x] Project initialization (v0.1)
- [x] Integrated development server (v0.1)
- [x] Templating (v0.2)

### Todo's:
- [ ] Support Nginx
- [ ] Support i18n

---

## Source tree
An initial Majorak install has the following:

| File/directory | Description |
| ----------- | ----------- |
| bin | Contains any CLI applications for development purposes. |
| majorak | Contains the Majorak framework source code. |
| .htaccess | Apache .htaccess ruleset. |
| KINT_LICENSE | The Kint license (MIT). |
| kint.phar | Kint debug library. |
| LICENSE | The Majorak license (BSD 2-clause). |
| README.md | Readme file. |

After running `bin/majorak init`, it should have the following:

| File/directory | Description |
| ----------- | ----------- |
| src/ | The applications source code directory. |
| src/routes | Contains any url/route combinations. |
| src/routes/index | Contains the example route. |
| src/routes/indexAction.php | The index Action component. |
| src/routes/indexDomain.php | The index Domain component. |
| src/routes/indexResponder.php | The index Responder component. |
| src/templates | Contains any templates. |
| src/templates/indexTemplate.php | The index template. |

---

## Development

### Routes
Routes are defined in the filesystem, under the `routes` directory, like the table below:

| Route | Directory |
| ----------- | ----------- |
| domain.xyz/foo | routes/foo/fooAction.php |
| domain.xyz/foo/bar | routes/foo/bar/barAction.php |

---

## Majorak CLI
Majorak aims to simplify development with a CLI application.

Usage is simply `bin/majorak [argument(s)]`

| Argument | Description |
| ----------- | ----------- |
| help | Displays how to use the CLI app |
| init | Initializes a basic Majorak app |
| develop | Runs a PHP development server at localhost:8000 |
| version | Display Majoraks version |

---

## Hosting requirements
- Apache2 with mod_rewrite enabled and AllowOverride All
