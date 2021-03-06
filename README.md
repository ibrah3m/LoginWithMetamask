# LoginWithMetamask
 
        
<div id="top"></div>

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/ibrah3m/demo-login-with-metamask) 
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/ibrah3m/demo-login-with-metamask">
    <img src="/src/image/svg/metamask-fox.svg" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">LOGIN-WITH-METAMASK</h3>

  <p align="center">
    An awesome laravel package made for adding  login with MetaMask wallet option in your projects!
    <br />
    <br />
    <a href="https://gitpod.io/#https://github.com/ibrah3m/demo-login-with-metamask">View Demo</a>
    ·
    <a href="https://github.com/ibrah3m/demo-login-with-metamask/issues">Report Bug</a>
    ·
    <a href="https://github.com/ibrah3m/demo-login-with-metamask">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://www.toptal.com/ethereum/one-click-login-flows-a-metamask-tutorial)

There are many great LOGIN packages available on GitHub. However, I didn't find one that really suited my needs in LARAVEL, so I created this enhanced one. I want to create a package for login with MetaMask so unique that it'll be the last one you ever need - I think this is it.

Here's why:
* Your time should be focused on creating something amazing. A project that solves a problem and helps others
* You shouldn't be doing the same tasks over and over like creating a Login page from scratch
* You should implement DRY principles to the rest of your life :smile:

Of course, no one package will serve all projects since your needs may be different but what makes this package unique is the simplicity of the installation by adding just the script link to your blade as explaind below . So I'll be adding more in the near future. You may also suggest changes by forking this repo and creating a pull request or opening an issue. Thanks to all the people have contributed to expanding this package!

Read the rest to get started

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

Frameworks/libraries used to bootstrap your package.
 

* [Laravel](https://laravel.com)
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)
* [Ethers](https://ethers.io)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

In the few come lines, we will give you instructions about how to set up this repo inside your project so let's follow and enjoy this installation trip.

### Prerequisites

First in order to install this package inside your laravel project , so to do that we prefere using composer as explained below .
* composer
  ```sh
  composer require ibrah3m/loginwithmetamsk
  ```
### Installation

_Below is an explanation of how you should install and set up the package inside your app.
1. add the package provider 
   ```sh
    At config/app.php put this line inside providers array 
    Ibrah3m\LoginWithMetamsk\MetamaskServiceProvider::class,
   ```
2. run the following in the command line 
   ```sh
   php artisan vendor:publish
   ```
   you will see a list of options select the below or 0 for all 
   ```sh
   Tag: public
   ``` 
   
<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

Here we go almost finsih , now you can use the package in different ways let's see each of them .

1. by route 
  ```sh
    just visit the link below 
    http://www.example.com/CustomLoginPage
  ```
2. by javascript plugin  
  ```sh
    inside your <HEAD> tag at  login blade just put the following links to make the template render automatically 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{route('metamask.plugin')}}">
  ```
3. adding just the login button instead of the whole template  
  ```sh
    *find the package at vendor folder called  "ibrah3m"
    *inside the views folder go to file 
    "FrontJsHook.blade.php" comment line 12  "$("body").append(`@include('loginwithmetamsk::MetaMaskLoginTemplate')`);"
    *now inside your login blade add login button by this line  
    <button class="btn btn-primary btn-block text-white btn-user" onClick="metamasklogin()" style="background: rgb(246,133,27);">MetaMask</button>
    *In the end your blade will contain all of the  below
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{route('metamask.plugin')}}">
    <button class="btn btn-primary btn-block text-white btn-user" onClick="metamasklogin()" style="background: rgb(246,133,27);">MetaMask</button>

  ```


_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [ ] Change Template Design


See the [open issues](https://github.com/ibrah3m/LoginWithMetamask/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Ibrahem Aljabr - [@website](https://ibrahem.org) 

Project Link: [https://github.com/ibrah3m/LoginWithMetamask](https://github.com/ibrah3m/LoginWithMetamask)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments


* [The package build according to this Article!](https://www.toptal.com/ethereum/one-click-login-flows-a-metamask-tutorial)


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/ibrah3m/LoginWithMetamask.svg?style=for-the-badge
[contributors-url]: https://github.com/ibrah3m/LoginWithMetamask/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/ibrah3m/LoginWithMetamask.svg?style=for-the-badge
[forks-url]: https://github.com/ibrah3m/LoginWithMetamask/network/members
[stars-shield]: https://img.shields.io/github/stars/ibrah3m/LoginWithMetamask.svg?style=for-the-badge
[stars-url]: https://github.com/ibrah3m/LoginWithMetamask/stargazers
[issues-shield]: https://img.shields.io/github/issues/ibrah3m/LoginWithMetamask.svg?style=for-the-badge
[issues-url]: https://github.com/ibrah3m/LoginWithMetamask/issues
[license-shield]: https://img.shields.io/github/license/ibrah3m/LoginWithMetamask?color=f&style=for-the-badge
[license-url]: https://github.com/ibrah3m/LoginWithMetamask/blob/master/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/iqald/
[product-screenshot]: /src/image/svg/examples/login.png
