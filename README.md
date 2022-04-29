# Majorak
> This is not yet production ready software. Use at your own risk.

Majorak is a minimalist, templating PHP web framework.

It's [ADR](https://github.com/pmjones/adr) combined with low level control without getting in the way.
A description of how ADR works can be found [here](https://github.com/pmjones/adr/blob/master/IMPLEMENTATION.md).

### Todo's:
- [ ] Support Nginx
- [ ] Actually get this working somewhat

---

## Source tree
An initial Majorak install has the following:

| File/directory | Description |
| ----------- | ----------- |
| bin | Contains any CLI applications for development purposes. |
| majorak | Contains the Majorak framework source code. |
| .htaccess | Contains any CLI applications for development purposes. |
| KINT_LICENSE | The Kint license (MIT). |
| kint.phar | Kint debug library |
| LICENSE | The Majorak license (BSD 3-clause). |
| README.md | Readme file. |

After running `bin/majorak init`, it should have the following:

| Directory | Description |
| ----------- | ----------- |
| src/routes | Contains any url/route combinations. |
| src/routes/404/404Action.php | The standard Majorak 404 route. |
| src/templates | Contains any templates. |
| src/templates/404Template.php | Contains any templates. |
| src/templates | Contains any templates. |
| src/templates | Contains any templates. |

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

Usage is simply `bin/majorak [argument(s)]`.

| Argument | Description |
| ----------- | ----------- |
| help | Displays how to use the CLI app |
| init | Initializes a basic Majorak app. |
| run | Runs a PHP development server at localhost:8000 |
| version | Displays Majoraks version. |

---

## Hosting requirements
- Apache2 with mod_rewrite enabled and AllowOverride All
