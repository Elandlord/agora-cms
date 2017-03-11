import Model from './Model';

class Photo extends Model{

	static modelName(){
		return 'photo';
	}

	save() {
		API.post(`${this.constructor.modelName()}/save`, this.data(), this.success, function() {
			// notify the user if something went wrong.
		});
	}

	update() {
		API.post(`${this.constructor.modelName()}/update/${this.id}`, this.data(), this.success, function() {
			// notify the user if something went wrong.
		});
	}

	delete(confirm = false, success) {
		if(confirm == true) {
			Notifier.askConfirmation(() => {
				API.delete('news', this.id);
				success();
			});
		}else{
			API.delete('news', this.id);
			success();
		}
	}

	static all(success, failure) {
		API.get('news', (data) => {
			let all = [];
			for(let object in data) {
				let newObject = new News(data[object]);
				all.push(newObject);
			}
			success(all);
		}, failure);
	}

	static find(id, success, failure) {
		API.get('news/' + id, function(data){
			let news = new News(data);
			success(news);
			Event.fire('newsLoaded');
		}, failure);
	}

	with(relation, factory) {
		API.get('api/news/' + this.id + '/' + relation, (relationData) => {
			this[relation] = factory(relationData); 
		});

	}

}

export default News;