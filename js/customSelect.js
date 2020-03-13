$ = jQuery;
$.fn.CustomSelect = function(placeholder, attrContainer, attrUl, attrLi) {
    var CustomSelect = this[0];
    var IdCustomSelect = CustomSelect.id;

    var CustomSelectOptionsLength = CustomSelect.options.length;
    var InputPlaceholder;
    if (placeholder) InputPlaceholder = placeholder;

    var NameCustomSelect = CustomSelect.name;
    var IdContainer = "custom-select-" + IdCustomSelect;

    var UlOptions = [];
    $(CustomSelect).wrap(
        "<div class='custom-select-container' id='" + IdContainer + "'></div>"
    );

    $("<input>")
        .attr({
            disabled: true,
            type: "hidden",
            name: NameCustomSelect,
            id: IdCustomSelect,
            placeholder: InputPlaceholder
        })
        .prependTo($("#" + IdContainer));

    $("<span>")
        .attr({
            class: "SpanOption",
            id: "Span-" + IdCustomSelect
        })
        .text(InputPlaceholder)
        .prependTo($("#" + IdContainer));

    $(
        "<ul class='UlOptions' id='UlOptions-" + IdCustomSelect + "'></ul>"
    ).appendTo($("#" + IdContainer));

    for (i = 0; i < CustomSelectOptionsLength; i++) {
        UlOptions.push({
            value: CustomSelect.options[i].value,
            text: CustomSelect.options[i].text
        });
    }

    UlOptions.forEach(function(item) {
        $("<li></li>")
            .attr({
                class: "LiOption",
                value: item.value,
                input: IdCustomSelect
            })
            .text(item.text)
            .appendTo($("#UlOptions-" + IdCustomSelect));
    });

    $("select#" + IdCustomSelect).remove();

    $("#" + IdContainer).click(function() {
        $("#UlOptions-" + IdCustomSelect).slideToggle("fast");
        if ($("#" + IdContainer).hasClass('spinArrow')) {
            $("#" + IdContainer).removeClass('spinArrow');
        } else {
            $("#" + IdContainer).addClass('spinArrow');
        }
    });

    if (attrContainer) $("#" + IdContainer).css(attrContainer);
    if (attrUl) $("#" + IdContainer + " ul").css(attrUl);
    if (attrLi) $("#" + IdContainer + " ul li").css(attrLi);

    $(".LiOption").click(function() {
        $("." + IdContainer).removeClass('spinArrow');

        $("#I" + IdCustomSelect).val($(this).attr("value"));
        $("#Span-" + IdCustomSelect).text($(this).attr("value"));
    });
};