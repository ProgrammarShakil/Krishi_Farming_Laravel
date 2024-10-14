$(document).ready(function () {
    // CUSTOMIZING QUILL EDITOR
    var quill = new Quill("#editor-container", {
        theme: "snow",
        modules: {
            toolbar: [
                // Font options
                [
                    {
                        font: [],
                    },
                ],

                // Header options (h1 to h6)
                [
                    {
                        header: [1, 2, 3, 4, 5, 6, false],
                    },
                ],

                // Formatting options
                ["bold", "italic", "underline", "strike"], // Toggle buttons

                // Color and Background options
                [
                    {
                        color: [],
                    },
                    {
                        background: [],
                    },
                ],

                // Text alignment options
                [
                    {
                        align: [],
                    },
                ],

                // List and indent options
                [
                    {
                        list: "ordered",
                    },
                    {
                        list: "bullet",
                    },
                ],

                // Add link, image, video, and formula
                ["link", "image", "video"],

                // Remove formatting button
                ["clean"],
            ],
        },
    });

    
});
