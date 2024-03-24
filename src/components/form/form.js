// Javascript Document

(() => {
  return {
    props: {
      action: {
        type: String
      },
      source: {
      	type: Object
	    },
      types: {
        type: Array
      },
      changeMode: {
        type: Boolean,
        default: true
      },
      changeType: {
        type: Boolean,
        default: true
      },
      changeGroup: {
        type: Boolean,
        default: true
      },
      mode: {
        type: String,
        default: 'public'
      },
      recurring: {
        type: Boolean,
        default: true
      }
    },
    data() {
      return {
        modes: [
          {text: bbn._("Public"), value: 'public'},
          {text: bbn._("Private"), value: 'private'},
          {text: bbn._("Group"), value: 'group'}
        ],
        groups: appui.groups,
	      root: appui.plugins['appui-event'] + '/',
        currentMode: this.mode,
        currentAction: this.action,
        formData: this.source || {
          start: bbn.fn.dateSQL(null, true),
          end: null,
          name: '',
          id_type: null,
          public: 1,
          id_user: null,
          id_group: null
        }
      };
    },
    methods: {
      onSuccess(d) {
        if (d.success) {
          this.$emit('success', d);
        }
        else {
          appui.error(d.error || null);
        }
      },
      setDefaultAction(){
        let defaultAction = appui.plugins['appui-event'] +
            '/actions/' +
            (this.source.id ? 'update' : 'insert');
        if (!this.action && (defaultAction !== this.currentAction)) {
          this.currentAction = defaultAction;
        }
        else if (this.action && (this.currentAction !== this.action)) {
          this.currentAction = this.action;
        }
      }
    },
    created() {
      this.setDefaultAction();
    },
    watch: {
      action() {
        this.setDefaultAction();
      },
      currentMode(v) {
        switch (v) {
          case 'public':
            this.formData.public = 1;
            this.formData.id_group = null;
            this.formData.id_user = null;
            break;
          case 'private':
            this.formData.public = 0;
            this.formData.id_group = null;
            this.formData.id_user = appui.userId;
            break;
          case 'private':
            this.formData.public = 0;
            this.formData.id_group = appui.app.group.id;
            this.formData.id_user = null;
            break;
        }
      }
    }
  };
})();
