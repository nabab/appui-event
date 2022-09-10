// Javascript Document

(() => {
  return {
    data() {
      return {
        modes: [
          {text: bbn._("Public"), value: 'public'},
          {text: bbn._("Private"), value: 'private'},
          {text: bbn._("Group"), value: 'group'}
        ],
	      root: appui.plugins['appui-event'] + '/',
        mode: 'public',
        formData: {
          startDate: bbn.fn.dateSQL(null, true),
          endDate: null,
          name: '',
          public: 1,
          id_user: null,
          id_group: null
        }
      };
    }
  };
})();
