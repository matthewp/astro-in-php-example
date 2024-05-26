import * as components from './dist/server/all.mjs';
import { renderers } from './dist/server/renderers.mjs';
import { manifest } from './dist/server/entry.mjs';
import { experimental_AstroContainer as AstroContainer } from 'astro/container';

const container = await AstroContainer.create({
  manifest,
  renderers,
  resolve(s) {
    const found = manifest.entryModules[s];
    if(found) {
      return `/astro-project/dist/client/${found}`;
    }
    return found;
  }
});

const html = await container.renderToString(components.ReactWrapper);
console.log(html);