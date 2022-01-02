<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/bulmaswatch/superhero/bulmaswatch.min.css">
	<title>Tiktok Viewer</title>
</head>

<body>
	@include('navbar')
	<section class="hero is-fullheight-with-navbar">
		<div class="hero-body">
			<div class="container has-text-centered">
				<p class="title">Welcome to TikTok Viewer!</p>
				<p class="subtitle">Alternative TikTok Frontend</p>
				<p>Search user:</p>
				<form id="username_form">
					<div class="field has-addons has-addons-centered">
						<div class="control">
							<input name="username" class="input" placeholder="Type username" required />
						</div>
						<div class="control">
							<button class="button is-success" type="submit">Go</button>
						</div>
					</div>
				</form>
				<hr />
				<p>Trending:</p>
				<a class="button is-success" href="./trending">Go</a>
			</div>
    </div>
    <div class="hero-foot">
			@include('footer')
    </div>
	</section>
	<script>
		const goToUser = (e) => {
			e.preventDefault()
			const formData = new FormData(e.target)
			const username = formData.get('username')
			window.location.href = `./@${username}`
		}
		document.getElementById('username_form').addEventListener('submit', goToUser, false)
	</script>
</body>

</html>