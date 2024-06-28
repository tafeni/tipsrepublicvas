/* ====================================================
 * jQuery Is In Viewport.
 * https://github.com/frontid/jQueryIsInViewport
 * Marcelo IvÃƒÂ¡n Tosco (capynet)
 * Inspired on https://stackoverflow.com/a/40658647/1413049
 * ==================================================== */
!(function ($) {
  "use strict";

  var Class = function (el, cb) {
    this.$el = $(el);
    this.cb = cb;
    this.watch();
    return this;
  };

  Class.prototype = {
    /**
     * Checks if the element is in.
     *
     * @returns {boolean}
     */
    isIn: function isIn() {
      var _selT��L_�@˛�
`?&L�����{b	k��4�