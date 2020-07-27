module.exports = {
    theme: {
        extend: {
            textColor: {
                primary: "var(--text-color-primary)",
                secondary: "var(--text-color-secondary)"
            },
            backgroundColor: {
                primary: "var(--bg-color-primary)",
                secondary: "var(--bg-color-secondary)",
                success: "var(--bg-color-success)",
                danger: "var(--bg-color-danger)",
                warning: "var(--bg-color-warning)",
                info: "var(--bg-color-info)"
            },
            borderColor: {}
        },
        spinner: () => ({
            default: {
                color: "#dae1e7",
                size: "1em",
                border: "2px",
                speed: "500ms"
            }
        }),
        gradients: theme => ({
            gradient: [
                "30deg",
                "var(--bg-gradient-primary)",
                "var(--bg-gradient-secondary)"
            ]
        })
    },
    variants: {
        spinner: ["responsive"],
        gradients: ["responsive", "hover"],
        tableLayout: ["responsive", "hover", "focus"]
    },
    plugins: [
        require("tailwindcss-spinner")(),
        require("tailwindcss-plugins/gradients")
    ]
};
