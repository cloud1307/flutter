import 'package:flutter/material.dart';

class Article extends StatelessWidget {
  @override
  Widget cont(Color color) {
    return Container(
      height: 200,
      width: 200,
      color: color,
    );
  }

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Article Home'),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: <Widget>[
            BannerImageWidget(),
            TitleWidget(),
            DescriptionWidget(),
            cont(Colors.green),
            cont(Colors.blue),
            cont(Colors.orange),
            cont(Colors.redAccent),
          ],
        ),
      ),
    );
  }
}

class BannerImageWidget extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Container(
        child: Image.network(
            "https://cdn.syncfusion.com/content/images/Flutter/pub_images/slider_images/slider-banner.png"));
  }
}

class TitleWidget extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Container(
        child: Text(
      "Flutter for Beginners - Setting up the Card Layout",
      style: TextStyle(fontSize: 24.0, fontWeight: FontWeight.bold),
    ));
  }
}

class DescriptionWidget extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Container(
        margin: EdgeInsets.all(5.0),
        child: Text(
            "This is the fourth article in the 'Flutter for Beginners' series. So far we have seen what flutter is about and how to get started in the world of flutter. We have also seen the things to be done to setup the flutter development environment and the flutter command line using which we can created a no of articles on how to do the flutter thing. but nothing has been so explanatory as does a thing for all what is required and not required. This is what a scrolling does to do the effect on the parent.",
            style: TextStyle(fontSize: 22.0, wordSpacing: 1.5)));
  }
}
