
# 贴吧MIS生成器

生成贴吧MIS文件，基于[Angular开发方案2.0](http://jsbear.baidu.com/2014/11/12/angularjs-new-dev-pattern/)

### 没听过Yeoman?

去[这里](http://yeoman.io/)了解一下:)

![](http://i.imgur.com/JHaAlBJ.png)

## 开始之前

在开始使用前，请确保你已经全局安装以下组件：
- [bower](http://bower.io/) `npm install -g bower`
- [grunt-cli](http://gruntjs.com/) `npm install -g grunt-cli`

## 安装

首先安装yeoman

```bash
npm install -g yo
```

然后安装本生成器

```bash
npm install -g generator-mis
```

## 使用

### 生成项目

在模块根目录执行：

```bash
yo mis
```

然后，请跟随贴心制作好的向导一步一步来。

### 生成一个view

在模块根目录执行：

```bash
yo mis:view <view名>
```
再也不用手动去创建勒！

### 生成一个widget

在模块根目录执行：

```bash
yo mis:widget <widget名>
```
再也不用手动去创建勒！
PS:在非angular项目中也能使用这个命令来增加widget

## 主题

目前只一个默认主题，之后会将之前进行过的项目进行抽取总结出更多主题可供选择。

![default theme](asset/default_theme.jpg)

## 插件

前端插件通过bower安装，目前仅包含以下插件，有需要再完善添加.

- [sweetalert](http://tristanedwards.me/sweetalert)
- [animate.css](http://daneden.github.io/animate.css/)

## FAQ

- 如何删除bower及npm安装的文件，也即`bower_components`文件夹和`node_modules`文件夹下的文件

> 您好，千万别手动删除，至少在Windows下，会提示文件路径太长无法删除的情况，正确的做法是将bower.json和package.json里面所有的依赖都删除，然后执行`bower prune`和`npm prune`。成功后，就可以爽快地`rm -rf`了，当然，此时你也可以手动删除了。

## License

MIT

## CONTRIBUTORS

[![Wayou Liu](https://avatars2.githubusercontent.com/u/3783096?v=3&s=117)](http://addyosmani.com) | [![Weitao Lee](https://avatars0.githubusercontent.com/u/1782542?v=3&s=117)](http://sindresorhus.com)
:---:|:---:
[Wayou Liu](http://wayou.github.io/) | [Weitao Lee](https://github.com/luckyadam)

## References

- [Build Your Own Yeoman Generator](http://code.tutsplus.com/tutorials/build-your-own-yeoman-generator--cms-20040)
- [underscore.string](https://github.com/epeli/underscore.string)
- [yeoman official documentation](http://yeoman.io/authoring/file-system.html)
- [Inquirer.js](https://github.com/SBoudrias/Inquirer.js)
- [yeoman generator jsdoc](http://yeoman.github.io/generator/file.html)
- [AST-query](https://github.com/SBoudrias/ast-query#toc9)
