import * as components from './dist/server/all.mjs';
import { unstable_AstroContainer as AstroContainer } from 'astro/container';

const container = await AstroContainer.create();
const html = await container.renderToString({ default: components.Hello });

console.log(html);