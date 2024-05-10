import { defineConfig } from 'astro/config';
import adapter from './adapter/index.mjs';
import react from '@astrojs/react';

export default defineConfig({
  output: 'server',
  adapter: adapter(),
  integrations: [react()]
});