/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\resources\\js\\app.js: Support for the experimental syntax 'jsx' isn't currently enabled (8:3):\n\n\u001b[0m \u001b[90m  6 | \u001b[39m\u001b[0m\n\u001b[0m \u001b[90m  7 | \u001b[39mrender(\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m  8 | \u001b[39m  \u001b[33m<\u001b[39m\u001b[33mApp\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m  \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m  9 | \u001b[39m    initialPage\u001b[33m=\u001b[39m{\u001b[33mJSON\u001b[39m\u001b[33m.\u001b[39mparse(el\u001b[33m.\u001b[39mdataset\u001b[33m.\u001b[39mpage)}\u001b[0m\n\u001b[0m \u001b[90m 10 | \u001b[39m    resolveComponent\u001b[33m=\u001b[39m{name \u001b[33m=>\u001b[39m require(\u001b[32m`./Pages/${name}`\u001b[39m)\u001b[33m.\u001b[39m\u001b[36mdefault\u001b[39m}\u001b[0m\n\u001b[0m \u001b[90m 11 | \u001b[39m  \u001b[33m/\u001b[39m\u001b[33m>\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\nAdd @babel/preset-react (https://git.io/JfeDR) to the 'presets' section of your Babel config to enable transformation.\nIf you want to leave it as-is, add @babel/plugin-syntax-jsx (https://git.io/vb4yA) to the 'plugins' section to enable parsing.\n    at Parser._raise (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:748:17)\n    at Parser.raiseWithData (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:741:17)\n    at Parser.expectOnePlugin (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9112:18)\n    at Parser.parseExprAtom (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10542:22)\n    at Parser.parseExprSubscripts (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10122:23)\n    at Parser.parseUpdate (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10102:21)\n    at Parser.parseMaybeUnary (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10091:17)\n    at Parser.parseExprOps (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9961:23)\n    at Parser.parseMaybeConditional (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9935:23)\n    at Parser.parseMaybeAssign (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9898:21)\n    at C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9865:39\n    at Parser.allowInAnd (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:11521:12)\n    at Parser.parseMaybeAssignAllowIn (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9865:17)\n    at Parser.parseExprListItem (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:11282:18)\n    at Parser.parseCallExpressionArguments (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10323:22)\n    at Parser.parseCoverCallAndAsyncArrowHead (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10231:29)\n    at Parser.parseSubscript (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10167:19)\n    at Parser.parseSubscripts (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10139:19)\n    at Parser.parseExprSubscripts (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10128:17)\n    at Parser.parseUpdate (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10102:21)\n    at Parser.parseMaybeUnary (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:10091:17)\n    at Parser.parseExprOps (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9961:23)\n    at Parser.parseMaybeConditional (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9935:23)\n    at Parser.parseMaybeAssign (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9898:21)\n    at Parser.parseExpressionBase (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9843:23)\n    at C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9837:39\n    at Parser.allowInAnd (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:11515:16)\n    at Parser.parseExpression (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:9837:17)\n    at Parser.parseStatementContent (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:11781:23)\n    at Parser.parseStatement (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:11650:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:12232:25)\n    at Parser.parseBlockBody (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:12218:10)\n    at Parser.parseTopLevel (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:11581:10)\n    at Parser.parse (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:13392:10)\n    at parse (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\parser\\lib\\index.js:13445:38)\n    at parser (C:\\Users\\xxroc\\Documents\\WebProjects\\mood\\node_modules\\@babel\\core\\lib\\parser\\index.js:54:34)");

/***/ }),

/***/ 0:
/*!***********************************************************!*\
  !*** multi ./resources/js/app.js ./resources/css/app.css ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\xxroc\Documents\WebProjects\mood\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\xxroc\Documents\WebProjects\mood\resources\css\app.css */"./resources/css/app.css");


/***/ })

/******/ });