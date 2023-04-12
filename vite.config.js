import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
	plugins: [
		laravel({
			input: ['resources/css/app.css', 'resources/js/app.js'],
			refresh: [
				'resources/js/**',
				'routes/**',
				'resources/views/**',
			],
		}),
		Vue({
			template: {
				transformAssetUrls: {
					base: null,
					includeAbsolute: false,
				}
			}
		})
	],
	resolve: {
		alias: {
			'~': path.resolve(__dirname, 'node_modules'),
			'@': path.resolve(__dirname, 'resources/js'),
			'@views': path.resolve(__dirname, 'resources/js/views'),
			'@store': path.resolve(__dirname, 'resources/js/store'),
			'@router': path.resolve(__dirname, 'resources/js/router'),
			'@components': path.resolve(__dirname, 'resources/js/components'),
		},
	},
});
