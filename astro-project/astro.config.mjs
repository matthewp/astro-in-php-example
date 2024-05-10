import { defineConfig } from 'astro/config';
import adapter from './adapter/index.mjs';

export default defineConfig({
  output: 'server',
  adapter: adapter()
});