// do not touch this file
Vue.component("paginate", VuejsPaginate);
Vue.component("spinner", VueSimpleSpinner);
var app = new Vue({
    el: "#app",
    data: {
        product_category: "",
        deal_type: "",
        store: "",
        pageInfo: "",
        q: "",
        page: 1,
        products: [],
        product_categories: [],
        deal_types: [],
        stores: [],
        loading: true
    },
    computed: {
        dropdownChange: function() {
            return this.product_category, this.deal_type, this.store, new Date();
        }
    },
    watch: {
        dropdownChange: function() {
            this.page = 1;
            this.loading = true;
            this.loadPage().then(res => {
                this.loading = false;
            });
        }
    },
    methods: {
        changePage: function(page) {
            this.page = page;
            this.loading = true;
            this.loadPage().then(res => {
                this.loading = false;
            });
        },
        loadPage: function() {
            return axios
                .get(
                    "/admin/api/products?store=" +
                        this.store +
                        "&deal_type=" +
                        this.deal_type +
                        "&product_category=" +
                        this.product_category +
                        "&page=" +
                        this.page +
                        "&q=" +
                        this.q
                )
                .then(res => {
                    this.products = res.data.data;
                    this.pageInfo = res.data.pageInfo;
                })
                .catch(err => {
                    console.log(err.response);
                    alert("something went wrong");
                });
        },
        loadDropDowns: function() {
            return axios.get("/admin/api/dropdowns").then(res => {
                this.product_categories = res.data.product_categories;
                this.deal_types = res.data.deal_types;
                this.stores = res.data.stores;
            });
        }
    },
    mounted: function() {
        this.loadDropDowns();
        this.loadPage().then(res => {
            this.loading = false;
        });
    }
});


$("#carousel").flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: true,
    itemWidth: 150,
    itemHeight: 150,
    itemMargin: 5,
    slideshow: true,
    slideshowSpeed: 6000
});

