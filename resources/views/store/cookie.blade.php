<x-store-head :canonical="'cookie'" :title="'Cookie'" :description="'Cookie'"/>
@livewire('store-header')
<main>
	<!---------------------------------------------------------->
	<!------------------------Breadcrumbs----------------------->
	<div class="breadcrumbs container">
		<a class="breadcrumbs__link" href="{{ url("/") }}">
			Home
		</a>
		<a class="breadcrumbs__link" href="{{ url("/cookie") }}">
			Cookie Policy
		</a>
	</div>
	<!----------------------End Breadcrumbs--------------------->
	<!---------------------------------------------------------->
	<!----------------------Section Header---------------------->
	<section class="section__header container">
		<h1 class="section__title">Cookie Policy</h1>
		<p class="section__text">
			Cookie and similar technology usage policy
		</p>
	</section>
	<!--------------------End Section Header-------------------->
	<!---------------------------------------------------------->
	<!------------------------Cookie List----------------------->
  <section class="container contract__container">
    <div class="contract">
        <h4 class="contract__subtitle">
            Cookie and similar technology usage policy
        </h4>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Cookies are used for the following purposes:
        </h4>
        <p class="contract__descr">
            website functionality,
        </p>
        <p class="contract__descr">
            analysis of site visitor behavior,
        </p>
        <p class="contract__descr">
            advertising purposes.
        </p>
        <p class="contract__descr">
            This policy complements the general data protection policy that you can find here, as well as the site Terms and Conditions available
            <a href="{{ url("/terms") }}">here</a>, which we encourage you to read. They include additional useful information, such as all purposes for data processing, your rights, as well as any exceptions and limitations, etc.
        </p>
        <p class="contract__descr">
            Proper protection of personal data is an important goal for  . Our desire is to be as clear and transparent as possible regarding our approach in this matter. For any questions, please contact us.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            What are Cookies?
        </h4>
        <p class="contract__descr">
            A cookie is a small file, consisting of letters and numbers, which will be stored on the user's computer, mobile device, or other equipment used to access the internet. The cookie is installed by a request from the user's device to a server or a third-party server.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            What are Cookies used for?
        </h4>
        <p class="contract__descr">
            These files mainly make it possible to recognize the user's device and present content in a way that is relevant and adapted to the user's preferences. Cookies provide users with a pleasant browsing experience and support  in offering more personalized services. They are also used for preparing anonymous aggregated statistics that help us understand how a user benefits from our website pages, allowing us to improve their structure and content, without allowing personal identification of the user.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            What Cookies do we use?
        </h4>
        <p class="contract__descr">
            We use two types of Cookies: session and persistent. Session cookies are temporary files that remain on the user's device until the session ends or the application is closed. Persistent cookies stay on the user's device for a specified period determined by the cookie parameters or until manually deleted by the user.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            How are cookies used by this site?
        </h4>
        <p class="contract__descr">
            A visit to this site may place the following types of cookies:
        </p>
        <p class="contract__descr">
            Strictly necessary cookies for the site's operation
        </p>
        <p class="contract__descr">
            Analytics cookies
        </p>
        <p class="contract__descr">
            Advertising cookies
        </p>
        <p class="contract__descr">
            Strictly necessary cookies and/or similar technologies are essential for the proper functioning of the site and are set on your device when accessing the site or as a result of actions taken on the site. You can configure your browser to block cookies, but in this case, some sections of the site may not function properly.
        </p>
        <p class="contract__descr">
            The other categories of cookies have the role indicated in this document.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Do cookies or similar technologies contain personal data?
        </h4>
        <p class="contract__descr">
            Cookies or similar technologies themselves do not require personal information to be used and, in many cases, do not personally identify internet users. However, there are situations where personal data can be collected through the use of cookies to facilitate certain features for the user or to provide a more personalized experience. Such data is encrypted in a way that prevents unauthorized access to it.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            What are similar technologies?
        </h4>
        <p class="contract__descr">
            There are other technologies that can be used for the same purposes as cookies.
        </p>
        <p class="contract__descr">
              uses Local Storage as a similar technology.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Blocking cookies
        </h4>
        <p class="contract__descr">
            If you wish to block cookies, some site functionalities will be disabled, which may cause certain malfunctions or errors in using our site. For example, blocking cookies may prevent you from:
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            making online purchases
        </h4>
        <p class="contract__descr">
            logging into your account
        </p>
        <p class="contract__descr">
            If you agree to these limitations and wish to block cookies, follow the instructions below:
        </p>
        <p class="contract__descr">
            Most browsers are set by default to accept cookies, but you can change the settings to block some or all cookies.
        </p>
        <p class="contract__descr">
            Choose your browser from the list below to see the instructions you need to follow after opening your browser.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Microsoft Internet Explorer 9 (Windows 7)
        </h4>
        <p class="contract__descr">
            click on the Settings icon (top right)
        </p>
        <p class="contract__descr">
            click on Internet Options
        </p>
        <p class="contract__descr">
            click on Privacy and then choose the options
        </p>
        <p class="contract__descr">
            click Apply and then OK to save preferences
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Google Chrome
        </h4>
        <p class="contract__descr">
            click on the key icon and select Options from the list
        </p>
        <p class="contract__descr">
            click on the "Advanced settings" tab
        </p>
        <p class="contract__descr">
            click on Content Settings in the Privacy section.
        </p>
        <p class="contract__descr">
            choose the settings you want
        </p>
        <p class="contract__descr">
            click X to close
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Safari
        </h4>
        <p class="contract__descr">
            choose Preferences
        </p>
        <p class="contract__descr">
            click on the privacy panel
        </p>
        <p class="contract__descr">
            choose the settings you want
        </p>
        <p class="contract__descr">
            click X to close
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Mozilla Firefox
        </h4>
        <p class="contract__descr">
            select Tools from the main bar, then Options
        </p>
        <p class="contract__descr">
            click on the Privacy tab
        </p>
        <p class="contract__descr">
            choose the settings you want
        </p>
        <p class="contract__descr">
            click OK to close
        </p>
        <p class="contract__descr">
            The links above do not belong to   and   is not responsible for their content.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Managing cookie preferences
        </h4>
        <p class="contract__descr">
            In general, an application used to access web pages allows cookies and/or similar technologies to be saved to the device by default. These settings can be changed so that automatic cookie management is blocked by the web browser, or the user is notified each time cookies are sent to the terminal. Detailed information about the possibilities and ways of managing cookies can be found in the settings area of the application (web browser). Limiting the use of cookies may affect certain website functionalities.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Why are cookies and/or similar technologies important for the internet?
        </h4>
        <p class="contract__descr">
            Cookies and/or similar technologies are a central point in the efficient functioning of the internet, helping to generate a friendly browsing experience tailored to each user's preferences and interests. Refusing or disabling cookies may make some websites or parts of websites impossible to use.
        </p>
        <p class="contract__descr">
            Disabling cookies does not mean you will no longer receive online advertising – it simply means that the advertising will no longer take your preferences and interests into account, based on your browsing behavior.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Important examples of cookie use (that do not require user authentication through an account):
        </h4>
        <p class="contract__descr">
            Content and services adapted to the user's preferences – categories of products and services.
        </p>
        <p class="contract__descr">
            Offers tailored to user interests
        </p>
        <p class="contract__descr">
            Remembering passwords
        </p>
        <p class="contract__descr">
            Remembering child protection filters regarding online content (family mode options, safe search features).
        </p>
        <p class="contract__descr">
            Limiting ad frequency – limiting the number of times an ad is shown to a specific user on a site.
        </p>
        <p class="contract__descr">
            Providing relevant advertising to the user.
        </p>
        <p class="contract__descr">
            Measuring, optimizing, and adapting analytics features – such as confirming a certain level of traffic on a website, what type of content is viewed, and how a user arrives at a website (e.g., through search engines, directly, from other websites, etc.). Websites conduct these analyses to improve their services for the benefit of users.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Security and privacy aspects
        </h4>
        <p class="contract__descr">
            In general, browsers have built-in privacy settings that provide different levels of cookie acceptance, validity periods, and automatic deletion after a user has visited a certain site.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Other security aspects related to cookies:
        </h4>
        <p class="contract__descr">
            Customizing browser settings regarding cookies to reflect a comfortable security level for your use of cookies.
        </p>
        <p class="contract__descr">
            If you are the only person using your computer, you can set long expiration terms for storing browsing history and personal access data if you wish.
        </p>
        <p class="contract__descr">
            If you share access to the computer, you might consider setting your browser to delete individual browsing data every time you close the browser. This is an option for accessing sites that place cookies and deleting any visit information upon closing the browsing session.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">
            Links and additional useful information
        </h4>
        <p class="contract__descr">
            If you want to learn more about cookies and their uses, we recommend the following links:
        </p>
        <p class="contract__descr">
            <a class="contract__link" href="https://www.youronlinechoices.com/ro/">youronlinechoices.com/ro</a>
        </p>
    </div>
  </section>
	<!----------------------End Cookie List--------------------->
	<!---------------------------------------------------------->
</main>
<x-store-footer />
