<?php
namespace BedrockTasks;

class LinkEnv extends \Rocketeer\Abstracts\AbstractTask
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Links the .env file';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->explainer->line('Linking the .env file');
    $envsrc = $this->paths->getHomeFolder() . '/shared/.env';
    $this->runForCurrentRelease('ln -s' . ' ' . $envsrc . ' ' . '.env' );
  }
}

class CreateEnv extends \Rocketeer\Abstracts\AbstractTask
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Creates the .env file';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->explainer->line('Creating the .env file');
    $envsrc = $this->paths->getHomeFolder() . '/shared/.env';
    $this->runForCurrentRelease('touch' . ' ' . $envsrc );
  }
}
?>
