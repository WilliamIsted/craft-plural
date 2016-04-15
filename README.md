# Plural
Just a simple plugin for Craft CMS

## Installation

To install Plural, follow these steps:

Upload the plural folder to craft/plugins/.
Go to Settings > Plugins from your Craft control panel and enable the Plural plugin.

## Usage

```jinja
{{ entries | length | plural('result') }} found.
```
Output: `2 results found.`


```jinja
{{ 0 | plural('result') }} found.
```
Output: `0 results found.`


```jinja
{{ 1 | plural('result') }} found.
```
Output: `0 result found.`


```jinja
{{ 1 | plural('result', 'foobars') }} found.
```
Output: `1 result found.`


```jinja
{{ 2 | plural('result', 'foobars') }} found.
```
Output: `2 foobars found.`
