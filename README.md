![Wordpress - Github Banner](https://github.com/jagerbob/bob-wordpress-plugin-template/assets/91737697/28373f8d-d7ec-49f9-b5c9-15e83a559edf)

# ⚒️ React & Typescript Wordpress plugin sample ⚒️
A sample plugin that contains all the boilerplate required to make a React & Typescript Wordpress plugin

This little code sample will show you how to use React and Typescript to develop a new Gutenberg Block. 
Most importantly, this code sample allow you to use dynamic react components on the editor side as well as in
the frontend side.

> **NOTE:**  This plugin has been tested with the version 6.1.1 of wordpress

## Usage 

To see if the sample code is working in your current wordpress environement, simply clone this repository inside the
plugin directory of your wordpress website `/wordpress/wp-content/plugins`. You should find a new Gutenberg block named "custom-block-sample".

In editor mode, you'll be able to edit a field sample like shown below: 

![image](https://user-images.githubusercontent.com/91737697/215525725-0221af01-14bd-4bbf-8b2d-6d1f49023359.png)

And when displayed in the frontend, you'll see this result:

![image](https://user-images.githubusercontent.com/91737697/215525943-28629020-8a9b-4785-bd70-9ac22311306b.png)

## Development

If this code sample fits your needs and you want to use it, you can do so by editing it's code, it's completely free to use and to modify,
and I don't ask you to credit me. For developpment puproses, you'll need to install the node dependencies using the following command:

```console
> npm install
```
Important files for customization : 
  - **index.php** : contains the configuration of your plugin, including it's name, description and author
  - **index.tsx** : contains the configuration of your Gutenberg block, including it's name, icon, ...
  - **EditorView.tsx** : the component that will be rendered on the editor side
  - **FrontendView.tsx** : the component that will be rendered on the frontend side, the component that the users will see

