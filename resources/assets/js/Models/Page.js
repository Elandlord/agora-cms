import Model from './Model';

class Page extends Model{

	save() {
		API.post('page/save', this.data(), this.success, function() {
			// notify the user if something went wrong.
		});
	}

	update() {
		API.post('page/update/' + this.id, this.data(), this.success, function() {
			// notify the user if something went wrong.
		});
	}

	delete(confirm = false, success) {
		if(confirm == true) {
			Notifier.askConfirmation(() => {
				API.delete('page', this.id);
				success();
			});
		}else{
			API.delete('page', this.id);
			success();
		}
	}

	static all(success, failure) {
		API.get('page', (data) => {
			let all = [];
			for(let object in data) {
				let newObject = new Page(data[object]);
				all.push(newObject);
			}
			success(all);
		}, failure);
	}

	static find(id, success, failure) {
		API.get('page/' + id + '/edit', function(data){
			let page = new Page(data);
			success(page);
			Event.fire('pageLoaded');
		}, failure);
	}

	static where(parameters, success, failure) {
		let data = "";
		for(let field in parameters) {
			data += field + '=' + parameters[field] + '&';
		}

		data = data.substring(0, data.length - 1);

		API.get('page/where?' + data, (page) => {
			let all = [];
			success(new Page(page));
		}, failure);
	}

	with(relation, factory) {
		API.get('page/' + this.id + '/' + relation, (relationData) => {
			this[relation] = factory(relationData); 
		});

	}

}

export default Section;