$.mask.definitions['9'] = false;
$.mask.definitions['5'] = "[0-9]";
$("#phone").mask("+7 (955) 555-55-55");
$("#phone2").mask("+7 (955) 555-55-55");


let validate =
{
	validate(_this)
	{
		let errors = true;
		let form = document.querySelector('._form');
		let input = document.querySelectorAll('._input-val')
		for(let val of input)
		{
			if(val.value === '')
			{
				val.classList.add('error');
				errors = false;
			}

			else
				val.classList.remove('error');
		}

		let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		let address = document.querySelector('._email');
		if(reg.test(address.value) === false)
		{
			address.classList.add('error');
			errors = false;
		}

		return errors;
	},
	send(_this, event)
	{
		event.preventDefault();
		if(this.validate(_this))
		{
			$.ajax({
				url: './sender.php',
				type: 'POST',
				dataType: 'html',
				data: $("._form").serialize(),
				success: function(responce)
				{
					console.log(responce);
				}
			});
		}
	}
}
