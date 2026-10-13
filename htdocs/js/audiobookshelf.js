(function ($) {
    var timer = null;

    function folderName(title) {
        return (title || "audiobook").replace(/[\\/:*?"<>|]/g, "").trim();
    }

    function render(payload) {
        var items = payload;
        var truncated = false;
        if (payload && payload.books) {
            items = payload.books;
            truncated = !!payload.truncated;
        }
        var $list = $("#absResults");
        $list.empty();
        if (!items || !items.length) {
            $list.append("<p class='help-block'>No books found.</p>");
            return;
        }
        $.each(items, function (_, item) {
            var label = item.title || item.uri;
            if (item.author) {
                label += " — " + item.author;
            }
            var $link = $("<a href='#' class='list-group-item'></a>").text(label);
            $link.on("click", function (event) {
                event.preventDefault();
                $("#streamURL").val(item.uri);
                $("#streamType").val("audiobookshelf");
                if ($.trim($("#audiofolderNew").val()) === "") {
                    $("#audiofolderNew").val(folderName(item.title));
                }
            });
            $list.append($link);
        });
        if (truncated) {
            $list.append("<p class='help-block'>Showing the first 100 books. Type to search the rest.</p>");
        }
    }

    function search(query) {
        $.ajax({
            url: "api/audiobookshelf.php",
            data: { q: query },
            dataType: "json"
        }).done(render).fail(function () {
            $("#absResults").empty().append(
                "<p class='help-block'>Audiobookshelf search failed. Is Mopidy running?</p>"
            );
        });
    }

    $(function () {
        if (!$("#absSearch").length) {
            return;
        }
        $("#absSearch").on("input", function () {
            var query = $(this).val();
            clearTimeout(timer);
            timer = setTimeout(function () {
                search(query);
            }, 300);
        });
        search("");
    });
})(jQuery);
