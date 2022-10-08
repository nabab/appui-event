// Javascript Document

(() => {
 return {
   data() {
     return {
       root: appui.plugins['appui-event'] + '/',
       isDeleting: false
     };
   },
   methods: {
     onDelete(idx, data, table, ev) {
       if (!this.isDeleting) {
         ev.preventDefault();
         this.confirm(
           bbn._("Are you sure you want to delete this event?"),
           () => {
             this.isDeleting = true;
             bbn.fn.post(this.root + 'actions/delete', data, d => {
               if (d.success) {
                 table.delete(idx, false);
                 table.updateData();
               }

               this.isDeleting = false;
             }, () => {
               this.isDeleting = false;
             });
           },
           () => {
             this.isDeleting = false;
           }
         );
       }

       return true;
     }
   }
 };
})();