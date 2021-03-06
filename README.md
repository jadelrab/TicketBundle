# Hackzilla Ticket Bundle

Simple ticketing bundle for any project.

[![Build Status](https://travis-ci.org/hackzilla/TicketBundle.png?branch=master)](https://travis-ci.org/hackzilla/TicketBundle)
[![Quality assurance](https://github.com/hackzilla/TicketBundle/workflows/Quality%20assurance/badge.svg)](https://github.com/hackzilla/TicketBundle/actions?query=workflow%3A%22Quality+assurance%22)
[![Lint](https://github.com/hackzilla/TicketBundle/workflows/Lint/badge.svg)](https://github.com/hackzilla/TicketBundle/actions?query=workflow%3ALint)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/091d37a9-7862-4365-952c-814ce95c4d6c/mini.png)](https://insight.sensiolabs.com/projects/091d37a9-7862-4365-952c-814ce95c4d6c)

## Requirements

You can see the full requirement definitions for each available version in [Packagist](https://packagist.org/packages/hackzilla/ticket-bundle).

## Setup

* [Installation with FOSUserBundle](Resources/doc/setup/fosuserbundle.md)
* [Generic installation](Resources/doc/setup/other.md)

## Optional features

These optional features that can be turned on or off.

### Features

* [Attachments](Resources/doc/setup/feature/attachments.md)
* [Custom entities](Resources/doc/setup/feature/custom-entities.md)
* [Events](Resources/doc/setup/feature/events.md)

## Optional integrations

* [FOSUserBundle](https://symfony.com/doc/current/bundles/FOSUserBundle/index.html)
* [Bootstrap v3](http://getbootstrap.com/docs/3.3/) (see http://symfony.com/blog/new-in-symfony-2-6-bootstrap-form-theme)

## 3rd party extensions

### [Email notifications](https://github.com/flodaq/TicketNotificationBundle)

### Custom templates (optional)

```yaml
# config/packages/hackzilla_ticket.yaml

hackzilla_ticket:
    templates:
        index: '@App/Ticket/index.html.twig'
        new: '@App/Ticket/new.html.twig'
        prototype: '@App/Ticket/prototype.html.twig'
        show: '@App/Ticket/show.html.twig'
        show_attachment: '@App/Ticket/show_attachment.html.twig'
```

## Translations

Built in translations are available for the following languages:

* Dutch
* English
* French
* German
* Italian
* Portuguese
* Russian
* Spanish

## Demo

See [Ticket Bundle Demo App](https://github.com/hackzilla/TicketBundleDemoApp) for an example installation. This can also be used for confirming bugs.

## Migrate a previous version

* [How to migrate](Resources/doc/migrate/index.md)

## Pull requests

I'm open to pull requests for additional languages, features and/or improvements.
