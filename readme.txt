=== jQuery Image Lazy Load WP ===
Contributors: ayn, jtai
Tags: images, jquery, javascript, optimization
Requires at least: 2.8
Tested up to: 3.5.2
Stable tag: 0.21

add jquery lazy loading to images

== Description ==

add lazy loading to WP, more info at http://plugins.jquery.com/project/lazyload

== Installation ==

unzip archive to wp-content/plugins directory, and activate it in Plugins page in wp-admin

or you can cd into your wordpress_root/wp-contents/plugins and do:

git clone git://github.com/ayn/wp-jquery-lazy-load.git

== Changelog ==

<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/8212a01909c6c01650d91c213bad20e15c83d418">view commit &bull;</a> Not filtering the content if is_feed()</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/dc6c0b05baf689167724957289fa79982276f780">view commit &bull;</a> tested up to WP 3.5.1</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/4e025b2d2834db45cecd5078fa0bdbbb3cab1f99">view commit &bull;</a> bump stable tag</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/975102fa7ceaeca7996728791956d42765c69d88">view commit &bull;</a> bumped version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/be08f323d4b7e0a62cbe2a09d7dd02e08356922b">view commit &bull;</a> automatically add required css to the page</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/f8978756dd6d62c23d5c88d6e85ddc4572d0d556">view commit &bull;</a> update readme</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/b847599dd2c4f7f93057b8bfb2d4bb0b4a4c43cf">view commit &bull;</a> rewrite plugin to support newer jquery_lazyload (1.7.1) which requires HTML changes</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/e703d5de82408417611a51d23c7f7243bf1f4731">view commit &bull;</a> themes don't always have .post around posts, imma stop messing with this for now</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/aca1e73fe53995f318553b4c7464ff93ad6ec371">view commit &bull;</a> themes don't always have .post around posts, imma stop messing with this for now</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/9517a144db2b6077494a18fe75164abaefed1854">view commit &bull;</a> oops</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/bfd01915c5b2688d315aaa40ec63971af676ad2b">view commit &bull;</a> better exclusion</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/b4badf76f4849bc0dfd07032af0dced833ef859c">view commit &bull;</a> ignoring images in cycle class</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/341f8784f38ea235c1390f6e3a6d1228dca76fff">view commit &bull;</a> bumped jquery version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/c9af37f3740b9f2bbf37fc68eb8d7f2a536982dc">view commit &bull;</a> not lazyloading on iPad</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/c1605e0fbd6257b2a99e43f5ee0b31257ba63119">view commit &bull;</a> 0.9</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/701b3c8ab40fa045ea4b3362ce12dc595aef0a01">view commit &bull;</a> works in 2.9.2 (my blog at least)</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/07181b1ee9902e1881bc354dc91355e962f30fa6">view commit &bull;</a> bumped version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/a9fe1444d131a42ef3696d77ff93af89c45afcf4">view commit &bull;</a> updated both jquery to 1.4.2, pulling from Google CDN, updated lazy load to 1.5.0</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/4f64cfe985ee33a29c21d72e88572bece379bcb9">view commit &bull;</a> forgot to bump version in readme</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/c83acca984aea45ef71484698af85d9b56dd3320">view commit &bull;</a> bump version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/b0f03117686d5be4a8f29faced800c94003a9063">view commit &bull;</a> bump version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/5dd0550504ceab160fa6ee4188173a045cb4decb">view commit &bull;</a> merged</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/760a75ee0736988a18d2904ce083dc0aebbd9406">view commit &bull;</a> changed '$' to 'jQuery' in case some other parts of WP registered jQuery with noConflict turned on.</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/51d5f741a7be24318547e70154366666573d1024">view commit &bull;</a> git svn sucks</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/af1ccdfe9e101086bf7c9e8a05689074897edb37">view commit &bull;</a> git svn sucks</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/b79dfd7faa7ed3d636aa36b5b2fc7174a434362e">view commit &bull;</a> missing a forward slash</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/e2b24fd8527ff92e8f7494da4b8572757f2c3ccd">view commit &bull;</a> fixed problem with plugin url when installing with zipfile, now only works with 2.8+ as plugins_url takes an extra param in 2.8+ to make my life easier</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/4cf5858e47d64efa81b5d0ee561fee9900d93aa0">view commit &bull;</a> svn sucks</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/1dd4b072d23b5b51f865e158c5d1c43317dbdc34">view commit &bull;</a> svn sucks</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/3190c1eeec96090d414d2b4cd2b247c05d259591">view commit &bull;</a> stable tag fail</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/e0584a3d6d24f374442cdb1006f21165ac277a8f">view commit &bull;</a> stable tag fail</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/541276649e65f5d0b0de07b4d8bfd011b22001b1">view commit &bull;</a> bump version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/e375db50d0744346f5a88f6a91bb0aca8237516c">view commit &bull;</a> bump version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/9d69e93f842dad1594cc71410a7fd161b9cd290e">view commit &bull;</a> bump version</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/adb5024f3b830bed62c8009bd29698e5a755736f">view commit &bull;</a> header changes</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/dcbdd808838829372b6bcff400544c0bc4241249">view commit &bull;</a> header changes</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/d5fc043021b0600dfa0da0d1c5b4cddc7f81db53">view commit &bull;</a> add git clone instructions to readme</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/b3ec02895298036d33c479eb66a3b15cd6e1b7ca">view commit &bull;</a> fixed path</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/3ac720e80b42010a19f6bd09d447e9130a3ec12e">view commit &bull;</a> quick wp plugin to get image lazy load with @tuupola's awesome plugin</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/cef26758a24aa038cc0f6a9714c9563fe66016d7">view commit &bull;</a> adding jquery-image-lazy-loading by ayn</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/407ced5e7fe8a41fc1c553bde8739d251ee1829f">view commit &bull;</a> add git clone instructions to readme</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/ff92bf7707d1ee96f064928b96de48ea39a5faa7">view commit &bull;</a> fixed path</li>
<li> <a href="https://github.com/ayn/wp-jquery-lazy-load/commit/06ef578480f0e067ce6cb336edbfdb49b142ef4b">view commit &bull;</a> quick wp plugin to get image lazy load with @tuupola's awesome plugin</li>
