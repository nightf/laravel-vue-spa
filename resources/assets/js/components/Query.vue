<template>
	<vue-query-builder
	  :rules="rules"
	  :maxDepth="2"
	  @queryUpdated="queryUpdated"
	  ></vue-query-builder>
</template>

<script>
import VueQueryBuilder from 'vue-query-builder';

export default {
  name: 'app',

  components: {
    VueQueryBuilder
  },

  methods: {
    queryUpdated (query) {
      this.query = query;
    }
  },

  data () {
    return {
      query: null,
      rules: [
        {
          type: "text",
          id: "first-name",
          label: "First Name",
        },
        {
          type: "text",
          id: "last-name",
          label: "Last Name",
        },
        {
          type: "radio",
          id: "plan-type",
          label: "Plan Type",
          choices: [
            {label: "Standard", value: "standard"},
            {label: "Premium", value: "premium"}
          ]
        }
      ]
    }
  }
}

</script>