function elementorEditorAddOnChangeHandler(widgetType, handler) {
    widgetType = widgetType ? ":" + widgetType : "";
    elementor.channels.editor.on("change" + widgetType, handler);
}

function elementorEditorOnChangeWidgetHandlers(widgetType, widgetControls, handler) {
    widgetControls.forEach(function (control) {
            elementorEditorAddOnChangeHandler(widgetType + ":" + control, handler);
        }
    );
}

(function ($) {
    // Make sure you run this code under Elementor.
    $(window).on("elementor/frontend/init", function () {
        // Fix visuals for Elementor Canvas template in editor.
        elementorFrontend.elements.$body.attr("id", "the7-body");
    });
})(jQuery);
