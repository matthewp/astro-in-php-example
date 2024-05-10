import * as components from './dist/server/all.mjs';
import { renderers } from './dist/server/renderers.mjs';
import { unstable_AstroContainer as AstroContainer } from 'astro/container';

const container = await AstroContainer.create({
  renderers: renderers
});
const html = await container.renderToString({ default: components.ReactWrapper });

console.log(html);